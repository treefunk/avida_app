<?php
class Area_model extends Crud_model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api/city_model');
    }

    public function all_2($filters = null)
    {
        $the_query = new WP_Query([
            'post_type' => 'area',
            'numberposts' => -1
        ]);
        
        $result = [];
        if ( $the_query->have_posts() ) {  
            while ( $the_query->have_posts() ){
                $the_query->the_post();

                $area = [
                    'id' => get_the_ID(),
                    'area_name' => get_the_title(),
                    'body' => get_the_content()
                ];

                $result[] = $area;
            }
            wp_reset_postdata(); 
        } else {  

        }


        return $result;
    }

    public function all(){
        $the_query = new WP_Query([
            'post_type' => 'area',
            'numberposts' => -1
        ]);
        
        $result = [];
        if ( $the_query->have_posts() ) {  
            while ( $the_query->have_posts() ){
                $the_query->the_post();

                $area = [
                    'id' => get_the_ID(),
                    'area_name' => get_the_title(),
                    'cities' => $this->city_model->getAllCitiesByAreaId(get_the_ID())
                ];

                $result[] = $area;
            }
            wp_reset_postdata(); 
        } else {  

        }


        return $result;

    }

    public function getAllAreasIds()
    {

        $areas = new WP_Query([
            'numberposts' => -1,
            'post_type' => 'area',
        ]);

        $areas_ids = [];

        if ( $the_query->have_posts() ) {  
            while ( $the_query->have_posts() ){
                $the_query->the_post();

                $areas_ids[] = get_the_ID();
            }
            wp_reset_postdata(); 
        } else {  

        }

        return $areas_ids;
    }

    public function getAreaIdByCityId($id)
    {
        return get_post_meta($id,'area',true);
    }

    public function getAreaByCityId($id)
    {
        $area_id = get_post_meta($id,'area',true);
        return get_post($area_id);
    }

    public function getById($id)
    {
        if($area = get_post($id)){
            if($area->post_type == 'area'){

                $formatted = new StdClass;
                $formatted->id = $area->ID;
                $formatted->name = $area->post_title;
                $formatted->body = $area->post_content;

                return $formatted;
            }
            return new StdClass;
        }
    }
}
