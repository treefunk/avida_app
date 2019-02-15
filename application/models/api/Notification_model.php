<?php
class Notification_model extends Crud_model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function all(){
        $the_query = new WP_Query([
            'post_type' => 'notification',
            'numberposts' => -1
        ]);

        $result = [];
        if ( $the_query->have_posts() ) {  
            while ( $the_query->have_posts() ){
                $the_query->the_post();

                $notification = [
                    'id' => get_the_ID(),
                    'title' => get_the_title(),
                    'body' => get_field('text'),
                    'created_at' => get_the_date('Y-m-d H:i:s'),        
                ];

                $result[] = $notification;
            }
            wp_reset_postdata(); 
        } else {  

        }


        return $result;
    }

    public function getById($id)
    {
        if($notification = get_post($id)){
            if($notification->post_type == 'notification'){
                
                $formatted = new StdClass;
                $formatted->id = $notification->ID;
                $formatted->title = $notification->post_title;
                $formatted->body = get_field('text',$id);
                $formatted->created_at = $notification->post_date;

                return $formatted;
            }
            return new StdClass;
        }
    }



}
