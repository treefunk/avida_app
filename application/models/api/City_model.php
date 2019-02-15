<?php
class City_model extends Crud_model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api/project_model');

    }

    public function all($filters = null)
    {
        $the_query = new WP_Query([
            'post_type' => 'city',
            'numberposts' => -1
        ]);
        
        $result = [];

        if ( $the_query->have_posts() ) {  
            while ( $the_query->have_posts() ){
                $the_query->the_post();

                $city = [
                    'id' => get_the_ID(),
                    'name' => get_the_title(),
                    'body' => get_the_content()
                ];

                $result[] = $city;
            }
            wp_reset_postdata(); 
        } else {  

        }

        return $result;
    }

    public function getAllCitiesByAreaId($id)
    {

        $the_query = new WP_Query([
            'post_type' => 'city',
            'numberposts' => -1,
            'meta_query' => [
                'relation' => 'AND',
                [
                'key' => 'area',
                'value' => $id,
                'compare' => '='
                ]
            ]
        ]);

        
        $result = [];

        if ( $the_query->have_posts() ) {  
            while ( $the_query->have_posts() ){
                $the_query->the_post();

                $city = [
                    'id' => get_the_ID(),
                    'city_name' => get_the_title(),
                    'projects' => $this->project_model->getProjectsByCityId(get_the_ID())
                ];

                $result[] = $city;
            }
            wp_reset_postdata(); 
        } else {  

        }

        return $result;
    }

    public function getById($id)
    {
        if($city = get_post($id)){
            if($city->post_type == 'city'){
                
                $formatted = new StdClass;
                $formatted->id = $city->ID;
                $formatted->name = $city->post_title;
                $formatted->body = $city->post_content;

                return $formatted;
            }
            return new StdClass;
        }
    }

    
}
