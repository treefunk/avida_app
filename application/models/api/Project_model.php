<?php
class Project_model extends Crud_model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api/area_model');
        $this->load->model('api/city_model');

    }


    //todo inherit to all models
    public function handleFilters($filters) 
    {
        if(!(count($filters)) || $filters == null){ // do not continue if there are no filters
            return [];
        }
        
        $meta_query = [
            'relation' => 'AND'
        ];

        foreach($filters as $key => $val){
            if($key == 'prop' || $key == 'area' || $key == 's'){
                continue;
            }
            $meta_query[] = [
                'key' => urlencode($key),
                'value' => urlencode($val),
                'compare' => 'LIKE'
            ];
        }

        return $meta_query;
    }

    public function all($filters = null)
    {
        $meta_query = $this->handleFilters($filters);
        

        $the_query = new WP_Query([
            'numberposts' => -1,
            'post_type' => 'project',
            'meta_query' => $meta_query,
            's' => $filters['s']
        ]);

        $projects = $projects->posts;
        
        $result = [];
        
        if ( $the_query->have_posts() ) {  
            while ( $the_query->have_posts() ){
                $the_query->the_post();
                

                $project = $this->generate_project();

                if(isset($filters['area'])){
                    $city = get_field('city');
                    $area_id = $this->area_model->getAreaIdByCityId($city->ID);
                    if($area_id == $filters['area']){
                        $result[] = $project;
                    }
                    continue;
                }

                if(isset($filters['city'])){
                    $city = get_field('city');
                    if($city->ID == $filters['city']){
                        $result[] = $project;
                    }
                    continue;
                }


                $result[] = $project;
                
                

            }
            wp_reset_postdata(); 
        } else {  

        } 


        return $result;
    }

    public function getProjectsByAreaId($id)
    {
        $the_query = new WP_Query([
            'numberposts' => -1,
            'post_type' => 'project',
            'meta_query' => $filters
        ]);

        $projects = $projects->posts;

        
        $result = [];
        
        if ( $the_query->have_posts() ) {  
            while ( $the_query->have_posts() ){
                $the_query->the_post();

                $area_id = $this->area_model->getAreaIdByCityId(get_field('city')->ID);

                if($id == $area_id){
                    $project = $this->generate_project();
                    $result[] = $project;
                }

                

            }
            wp_reset_postdata(); 
        } else {  

        } 

        return $result;
    }

    /**
     * returns a formatted project
     * must be inside the WP loop
     */
    public function generate_project($single = false)
    {

        if(!$single){  
            $project = [
                'id' => get_the_ID(),
                'project_name' => get_the_title(),
                'property_type' => get_field('property_type'),
                'coverimages_title' => get_values_in_repeater('cover_images','cover_title'),
                'coverimages_image' => get_values_in_repeater('cover_images','cover_image'),
                'excerpt' => get_field('excerpt') ?: "",
            ];
        }else{
            $last_updated = get_the_modified_date() .' '. get_the_modified_time();

            $new_last_updated = DateTime::createFromFormat('F j, Y H:i A',$last_updated,new DateTimeZone('Asia/Hong_Kong'))->format('Y-m-d h:i:s');

            $citydb = get_field('city');

            $city = [
                'id' => $citydb->ID,
                'name' => $citydb->post_title,
                'body' => $citydb->post_content
            ];

            $areadb = $this->area_model->getAreaByCityId($citydb->ID);


            $area = [
                'id' => $areadb->ID,
                'name' => $areadb->post_title,
                'body' => $areadb->post_content,
            ];

            $project = [
                'id' => get_the_ID(),
                'prop' => get_the_title(),
                'property_type' => get_field('property_type'),
                'menuImage' => get_field('menu_image') ?:"",
                'prop_logo' => get_field('logo') ?: "",
                'coverimages_title' => get_values_in_repeater('cover_images','cover_title'),
                'coverimages_image' => get_values_in_repeater('cover_images','cover_image'),
                'excerpt' => get_field('excerpt'),
                'ov_description' => get_field('overview_description'),
                'overview' => get_field('overview'),
                'video_link' => get_field('video_link'),
                'overview_image' => get_field('overview_image') ?: "",
                'amenities' => $this->categorize_amenities(),
                'floorplan_image' => get_values_in_repeater('floor_plans','floorplan_image'),
                'floorplan_title' => get_values_in_repeater('floor_plans','floorplan_title'),
                'gallery_image' => get_values_in_repeater('gallery','gallery_image'),
                'gallery_title' => get_values_in_repeater('gallery','gallery_title'),
                'location_lat' => get_field('location_latitude'),
                'location_long' => get_field('location_longitude'),
                'location_title' => get_field('location_title'),
                'location_image' => get_field('loc_image') ?: "",
                'city' => $city,
                'area' => $area,
                'unitplans_image' => get_values_in_repeater('unit_plans','unitplans_image'),
                'unitplans_title' => get_values_in_repeater('unit_plans', 'unitplans_title'),
                'cons_update_title' => get_values_in_repeater('construction_updates','cons_update_title'),
                'cons_update_image' => get_values_in_repeater('construction_updates','cons_update_image'),
                'ios_video' => get_field('ios_video'),
                'and_video' => get_field('and_video'),
                'last_updated' => $new_last_updated
            ];
        }

        

        // if($areadb->post_type == 'project'){
        //     var_dump(get_field_object('area',173))['value']; die();
        // }


        

        return $project;
    }

    public function getProjectById($id){

        $project = get_post($id);
        if($project->post_type == 'project'){

            $the_query = new WP_Query([
                'p' => $project->ID,
                'post_type' => 'project'
            ]);
    
            
            $result = (object)[];
            
            if ( $the_query->have_posts() ) {  
                while ( $the_query->have_posts() ){
                    $the_query->the_post();
    
                    $project = $this->generate_project(true);
                    $result = $project;
    
                    
                    
                    
    
                }
                wp_reset_postdata(); 
            } else {  
    
            } 



            return $result;
        }else{
            return new StdClass;
        }

    }

    public function categorize_amenities()
    {
        $amenities = get_field('amenities');

        $result = [];
        for($x = 0; $x < count($amenities); $x++)
        {
            //
            if(count($result) == 0){

                if($cat = $this->createNewCat($x,$amenities)){ $result[] = $cat; }

            }else{
                $found = false;
                    for($y = 0 ; $y < count($result); $y++)
                    {
                        if($result[$y]['category'] == $amenities[$x]['category'])
                        {
                            $result[$y]['category_titles'][] = $amenities[$x]['amen_title'];
                            $result[$y]['category_images'][] = $amenities[$x]['amen_image'];
                            $found = true;
                            break;
                        }              
                    }
                if(!$found){
                    $result[] = $this->createNewCat($x,$amenities);
                }   
                    
            }
        }
        
        return $result;
    }

    public function createNewCat($index,$amenities)
    {

        $cat = [
            'category' => $amenities[$index]['category'],
            'category_titles' => [],
            'category_images' => []
        ];
        $cat['category_titles'][] = $amenities[$index]['amen_title'];
        $cat['category_images'][] = $amenities[$index]['amen_image'];

        if($amenities[$index]['category'] != null){
            return $cat;
        }else{
            return false;
        }
    }

    public function getProjectsByCityId($id)
    {
        $result = $this->all(['city' => $id]);
        return $result;
    }
}
