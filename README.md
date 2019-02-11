
# Avida App CMS


## Table of contents

1. **Projects**
    + [Get Projects](#get-projects)
    + [Get Projects By Property Type](#get-projects-by-property-type)
    + [Get Projects With Search Parameter](#get-projects-with-search)
    + [Get Projects By Area Id](#get-projects-by-area-id)
    + [Get Projects By City Id](#get-projects-by-city-id)
    + [Get Single Project By Id](#get-single-project)
    + [Get All Areas](#get-all-areas)
    + [Get Area By Id](#get-area-by-id)
    + [Get All Cities](#get-all-cities)
    + [Get City By Id](#get-city-by-id)
    + [Get All Notifications](#get-all-notifications)
    + [Get All Cities By Area Id](#get-cities-by-area-id)
    + [Get About Us Content](#get-about-us-content)

# Get Projects


**URL** : `/api/projects`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**

```json
{
    "data": [
        {
            "id": 156,
            "prop": "Aspira",
            "property_type": "houseandlot",
            "menuImage": "http://localhost/avida_app/wp-content/uploads/2019/01/Ken_Kaneki3.png",
            "prop_logo": "http://localhost/avida_app/wp-content/uploads/2019/01/110pixels.jpg",
            "cover_image": "http://localhost/avida_app/wp-content/uploads/2019/01/samplethumb.jpeg",
            "ov_description": "Start a new week by sharing ASPIRATIONS.",
            "overview": "<p>Cagayan De Oro Gateway Corp., a joint partnership between Ayala Land Inc. (ALI), and the Antonio Floirendo Group of Companies (Anflo Group) offers residential spaces and new retail opportunities for the modern contemporary Filipino with its second tower offering in Cagayan de Oro-Avida Towers Aspira.</p>\n<p>Avida Towers Aspira further advances living in CDO by providing homes that are situated at a safe and advantageous location, masterfully planned and designed to suit the evolving market of CDO. Handling the development&#8217;s Marketing and Sales Operations is Avida Land Corp. The towers are poised to become the top choice for a Home in the City, catering to those looking for a secure, convenient, and relaxing place to call their own. Its resort-like amenities ensure that there&#8217;s never a dull day at home, even in the confines of your own unit. Avida Towers Aspira is carefree living every day.</p>\n<p>Location: Along Ramon Chavez St., Cagayan De Oro City.<br />Size of Units: Approx. 22.4 sq.m. to 91.56 sq.m.<br />Price Range: Studio: Php 1.9M to Php 2.3M<br />1 Bedroom: Php 3.1M to Php 4.0M<br />2 Bedroom: Php 6.1M to Php 6.3M<br />1 BR Bi Level: Php 4.7M to Php 5.7M<br />3 BR Bi Level: Php 8.6 to Php 9.1M</p>\n<p>TLTS No.: TLS – 13 – 001 (NMR10)</p>\n",
            "overview_image": "http://localhost/avida_app/wp-content/uploads/2019/01/step4-big.jpg",
            "amen_titles": [
                "Shaded Deck and Pool Area",
                "Pool Area",
                "Play Area"
            ],
            "amen_images": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/1200x900.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/1200x900.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/1200x900.jpg"
            ],
            "floorplan_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/Macy-Floor-Plan.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/Trista-Floor-Plan.jpg"
            ],
            "floorplan_title": [
                "Floor plan 1",
                "Floor plan 2"
            ],
            "gallery_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/samplethumb.jpeg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/feelsbadman.jpeg"
            ],
            "gallery_title": [
                "city",
                "feelsbadman"
            ],
            "location_lat": "10",
            "location_long": "20",
            "location_title": "Avida Towers Aspira",
            "location_image": "http://localhost/avida_app/wp-content/uploads/2019/01/Bg_geometric.jpg",
            "city": {
                "id": 75,
                "name": "Quezon City",
                "body": ""
            },
            "area": {
                "id": 32,
                "name": "Metro Manila",
                "body": ""
            },
            "unitplans_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/Bg_geometric.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/Optimind02.png"
            ],
            "unitplans_title": [
                "unitplan1",
                "unitplan2"
            ],
            "ios_video": "Avida Towers Aspira",
            "and_video": "vf1FaFuFm",
            "last_updated": "2019-01-14 07:52:00"
        }
    ],
    "meta": {
        "message": "Got All Data",
        "code": 200
    }
}
```

# Get Projects By Property Type


**URL** : `/api/projects?property_type={houseandlot/condominium}`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**

```json
{
    "data": [
        {
            "id": 232,
            "prop": "another project in makati",
            "property_type": "condominium",
            "menuImage": "http://localhost/avida_app/wp-content/uploads/2019/01/feelsbadman.jpeg",
            "prop_logo": "http://localhost/avida_app/wp-content/uploads/2019/01/Optimind02.png",
            "cover_image": false,
            "ov_description": "test",
            "overview": "<p>overview</p>\n",
            "overview_image": "http://localhost/avida_app/wp-content/uploads/2019/01/110pixels.jpg",
            "amen_titles": [
                "am1",
                "am2"
            ],
            "amen_images": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/Bg_geometric.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/Bg_geometric.jpg"
            ],
            "floorplan_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/Trista-Floor-Plan.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/Macy-Floor-Plan.jpg"
            ],
            "floorplan_title": [
                "plann1",
                "plan2"
            ],
            "gallery_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/110pixels.jpg"
            ],
            "gallery_title": [
                "3f"
            ],
            "location_lat": "14",
            "location_long": "62",
            "location_title": "location title",
            "location_image": "http://localhost/avida_app/wp-content/uploads/2019/01/step4-big.jpg",
            "city": {
                "id": 173,
                "name": "Cebu City",
                "body": ""
            },
            "area": {
                "id": 170,
                "name": "Visayas",
                "body": ""
            },
            "unitplans_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/Macy-Floor-Plan.jpg"
            ],
            "unitplans_title": [
                "unitplan 111"
            ],
            "ios_video": "ios",
            "and_video": "and",
            "last_updated": "2019-01-16 05:47:00"
        },
        {
            "id": 172,
            "prop": "proj in makati",
            "property_type": "condominium",
            "menuImage": "http://localhost/avida_app/wp-content/uploads/2019/01/feelsbadman.jpeg",
            "prop_logo": "http://localhost/avida_app/wp-content/uploads/2019/01/Optimind02.png",
            "cover_image": "http://localhost/avida_app/wp-content/uploads/2019/01/Bg_geometric.jpg",
            "ov_description": "test",
            "overview": "<p>test</p>\n",
            "overview_image": "http://localhost/avida_app/wp-content/uploads/2019/01/110pixels.jpg",
            "amen_titles": [
                "amenity1"
            ],
            "amen_images": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/1200x900.jpg"
            ],
            "floorplan_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/Trista-Floor-Plan.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/Macy-Floor-Plan.jpg"
            ],
            "floorplan_title": [
                "floorplan 1",
                "floorplan 2"
            ],
            "gallery_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/1200x900.jpg"
            ],
            "gallery_title": [
                "flowr"
            ],
            "location_lat": "123",
            "location_long": "321",
            "location_title": "fdsfsd",
            "location_image": "http://localhost/avida_app/wp-content/uploads/2019/01/step4-big.jpg",
            "city": {
                "id": 171,
                "name": "Makati City",
                "body": ""
            },
            "area": {
                "id": 32,
                "name": "Metro Manila",
                "body": ""
            },
            "unitplans_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/Trista-Floor-Plan.jpg"
            ],
            "unitplans_title": [
                "unitplan1"
            ],
            "ios_video": "iosvid",
            "and_video": "andvid",
            "last_updated": "2019-01-16 02:54:00"
        }
    ],
    "meta": {
        "message": "Got All Data",
        "code": 200
    }
}

```

# Get Projects with Search


**URL** : `/api/projects?s={keyword}`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**

**URL**: `/api/projects?s=floirendo`

One of the projects in overview property has the keyword 'floirendo'


```json
{
    "data": [
        {
            "id": 156,
            "prop": "Aspira",
            "property_type": "houseandlot",
            "menuImage": "http://localhost/avida_app/wp-content/uploads/2019/01/Ken_Kaneki3.png",
            "prop_logo": "http://localhost/avida_app/wp-content/uploads/2019/01/110pixels.jpg",
            "cover_image": "http://localhost/avida_app/wp-content/uploads/2019/01/samplethumb.jpeg",
            "ov_description": "Start a new week by sharing ASPIRATIONS.",
            "overview": "<p>Cagayan De Oro Gateway Corp., a joint partnership between Ayala Land Inc. (ALI), and the Antonio Floirendo Group of Companies (Anflo Group) offers residential spaces and new retail opportunities for the modern contemporary Filipino with its second tower offering in Cagayan de Oro-Avida Towers Aspira.</p>\n<p>Avida Towers Aspira further advances living in CDO by providing homes that are situated at a safe and advantageous location, masterfully planned and designed to suit the evolving market of CDO. Handling the development&#8217;s Marketing and Sales Operations is Avida Land Corp. The towers are poised to become the top choice for a Home in the City, catering to those looking for a secure, convenient, and relaxing place to call their own. Its resort-like amenities ensure that there&#8217;s never a dull day at home, even in the confines of your own unit. Avida Towers Aspira is carefree living every day.</p>\n<p>Location: Along Ramon Chavez St., Cagayan De Oro City.<br />Size of Units: Approx. 22.4 sq.m. to 91.56 sq.m.<br />Price Range: Studio: Php 1.9M to Php 2.3M<br />1 Bedroom: Php 3.1M to Php 4.0M<br />2 Bedroom: Php 6.1M to Php 6.3M<br />1 BR Bi Level: Php 4.7M to Php 5.7M<br />3 BR Bi Level: Php 8.6 to Php 9.1M</p>\n<p>TLTS No.: TLS – 13 – 001 (NMR10)</p>\n",
            "overview_image": "http://localhost/avida_app/wp-content/uploads/2019/01/step4-big.jpg",
            "amen_titles": [
                "Shaded Deck and Pool Area",
                "Pool Area",
                "Play Area"
            ],
            "amen_images": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/1200x900.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/1200x900.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/1200x900.jpg"
            ],
            "floorplan_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/Macy-Floor-Plan.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/Trista-Floor-Plan.jpg"
            ],
            "floorplan_title": [
                "Floor plan 1",
                "Floor plan 2"
            ],
            "gallery_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/samplethumb.jpeg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/feelsbadman.jpeg"
            ],
            "gallery_title": [
                "city",
                "feelsbadman"
            ],
            "location_lat": "10",
            "location_long": "20",
            "location_title": "Avida Towers Aspira",
            "location_image": "http://localhost/avida_app/wp-content/uploads/2019/01/Bg_geometric.jpg",
            "city": {
                "id": 75,
                "name": "Quezon City",
                "body": ""
            },
            "area": {
                "id": 32,
                "name": "Metro Manila",
                "body": ""
            },
            "unitplans_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/Bg_geometric.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/Optimind02.png"
            ],
            "unitplans_title": [
                "unitplan1",
                "unitplan2"
            ],
            "ios_video": "Avida Towers Aspira",
            "and_video": "vf1FaFuFm",
            "last_updated": "2019-01-14 07:52:00"
        }
    ],
    "meta": {
        "message": "Got All Data",
        "code": 200
    }
}

```

# Get Projects By Area Id


**URL** : `/api/projects/area/{area_id}`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**

area_id : 32


```json
{
    "data": [
        {
            "id": 172,
            "prop": "proj in makati",
            "property_type": "condominium",
            "menuImage": "http://localhost/avida_app/wp-content/uploads/2019/01/feelsbadman.jpeg",
            "prop_logo": "http://localhost/avida_app/wp-content/uploads/2019/01/Optimind02.png",
            "cover_image": "http://localhost/avida_app/wp-content/uploads/2019/01/Bg_geometric.jpg",
            "ov_description": "test",
            "overview": "<p>test</p>\n",
            "overview_image": "http://localhost/avida_app/wp-content/uploads/2019/01/110pixels.jpg",
            "amen_titles": [
                "amenity1"
            ],
            "amen_images": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/1200x900.jpg"
            ],
            "floorplan_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/Trista-Floor-Plan.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/Macy-Floor-Plan.jpg"
            ],
            "floorplan_title": [
                "floorplan 1",
                "floorplan 2"
            ],
            "gallery_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/1200x900.jpg"
            ],
            "gallery_title": [
                "flowr"
            ],
            "location_lat": "123",
            "location_long": "321",
            "location_title": "fdsfsd",
            "location_image": "http://localhost/avida_app/wp-content/uploads/2019/01/step4-big.jpg",
            "city": {
                "id": 171,
                "name": "Makati City",
                "body": ""
            },
            "area": {
                "id": 32,
                "name": "Metro Manila",
                "body": ""
            },
            "unitplans_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/Trista-Floor-Plan.jpg"
            ],
            "unitplans_title": [
                "unitplan1"
            ],
            "ios_video": "iosvid",
            "and_video": "andvid",
            "last_updated": "2019-01-16 02:54:00"
        },
        {
            "id": 156,
            "prop": "Aspira",
            "property_type": "houseandlot",
            "menuImage": "http://localhost/avida_app/wp-content/uploads/2019/01/Ken_Kaneki3.png",
            "prop_logo": "http://localhost/avida_app/wp-content/uploads/2019/01/110pixels.jpg",
            "cover_image": "http://localhost/avida_app/wp-content/uploads/2019/01/samplethumb.jpeg",
            "ov_description": "Start a new week by sharing ASPIRATIONS.",
            "overview": "<p>Cagayan De Oro Gateway Corp., a joint partnership between Ayala Land Inc. (ALI), and the Antonio Floirendo Group of Companies (Anflo Group) offers residential spaces and new retail opportunities for the modern contemporary Filipino with its second tower offering in Cagayan de Oro-Avida Towers Aspira.</p>\n<p>Avida Towers Aspira further advances living in CDO by providing homes that are situated at a safe and advantageous location, masterfully planned and designed to suit the evolving market of CDO. Handling the development&#8217;s Marketing and Sales Operations is Avida Land Corp. The towers are poised to become the top choice for a Home in the City, catering to those looking for a secure, convenient, and relaxing place to call their own. Its resort-like amenities ensure that there&#8217;s never a dull day at home, even in the confines of your own unit. Avida Towers Aspira is carefree living every day.</p>\n<p>Location: Along Ramon Chavez St., Cagayan De Oro City.<br />Size of Units: Approx. 22.4 sq.m. to 91.56 sq.m.<br />Price Range: Studio: Php 1.9M to Php 2.3M<br />1 Bedroom: Php 3.1M to Php 4.0M<br />2 Bedroom: Php 6.1M to Php 6.3M<br />1 BR Bi Level: Php 4.7M to Php 5.7M<br />3 BR Bi Level: Php 8.6 to Php 9.1M</p>\n<p>TLTS No.: TLS – 13 – 001 (NMR10)</p>\n",
            "overview_image": "http://localhost/avida_app/wp-content/uploads/2019/01/step4-big.jpg",
            "amen_titles": [
                "Shaded Deck and Pool Area",
                "Pool Area",
                "Play Area"
            ],
            "amen_images": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/1200x900.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/1200x900.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/1200x900.jpg"
            ],
            "floorplan_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/Macy-Floor-Plan.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/Trista-Floor-Plan.jpg"
            ],
            "floorplan_title": [
                "Floor plan 1",
                "Floor plan 2"
            ],
            "gallery_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/samplethumb.jpeg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/feelsbadman.jpeg"
            ],
            "gallery_title": [
                "city",
                "feelsbadman"
            ],
            "location_lat": "10",
            "location_long": "20",
            "location_title": "Avida Towers Aspira",
            "location_image": "http://localhost/avida_app/wp-content/uploads/2019/01/Bg_geometric.jpg",
            "city": {
                "id": 75,
                "name": "Quezon City",
                "body": ""
            },
            "area": {
                "id": 32,
                "name": "Metro Manila",
                "body": ""
            },
            "unitplans_image": [
                "http://localhost/avida_app/wp-content/uploads/2019/01/Bg_geometric.jpg",
                "http://localhost/avida_app/wp-content/uploads/2019/01/Optimind02.png"
            ],
            "unitplans_title": [
                "unitplan1",
                "unitplan2"
            ],
            "ios_video": "Avida Towers Aspira",
            "and_video": "vf1FaFuFm",
            "last_updated": "2019-01-14 07:52:00"
        }
    ],
    "meta": {
        "message": "Got All Data",
        "code": 200
    }
}

```


# Get Projects By City Id


**URL** : `/api/projects/city/{city_id}`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**
city_id: 173
```json
{
    "data": [
        {
            "id": 232,
            "prop": "another project in makati",
            "property_type": "condominium",
            "menuImage": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/feelsbadman.jpeg",
            "prop_logo": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Optimind02.png",
            "cover_image": false,
            "ov_description": "test",
            "overview": "<p>overview</p>\n",
            "overview_image": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/110pixels.jpg",
            "amen_titles": [
                "am1",
                "am2"
            ],
            "amen_images": [
                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Bg_geometric.jpg",
                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Bg_geometric.jpg"
            ],
            "floorplan_image": [
                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Trista-Floor-Plan.jpg",
                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Macy-Floor-Plan.jpg"
            ],
            "floorplan_title": [
                "plann1",
                "plan2"
            ],
            "gallery_image": [
                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/110pixels.jpg"
            ],
            "gallery_title": [
                "3f"
            ],
            "location_lat": "14",
            "location_long": "62",
            "location_title": "location title",
            "location_image": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/step4-big.jpg",
            "city": {
                "id": 173,
                "name": "Cebu City",
                "body": ""
            },
            "area": {
                "id": 170,
                "name": "Visayas",
                "body": ""
            },
            "unitplans_image": [
                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Macy-Floor-Plan.jpg"
            ],
            "unitplans_title": [
                "unitplan 111"
            ],
            "ios_video": "ios",
            "and_video": "and",
            "last_updated": "2019-01-16 05:47:00"
        },
        {
            "id": 174,
            "prop": "proj in cebu",
            "property_type": "houseandlot",
            "menuImage": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/samplethumb.jpeg",
            "prop_logo": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Optimind02.png",
            "cover_image": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Ken_Kaneki3.png",
            "ov_description": "test ov description cebu",
            "overview": "<p><strong>test ov cebu</strong></p>\n",
            "overview_image": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/samplethumb.jpeg",
            "amen_titles": [
                "amen1"
            ],
            "amen_images": [
                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/1200x900.jpg"
            ],
            "floorplan_image": [
                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Macy-Floor-Plan.jpg"
            ],
            "floorplan_title": [
                "floor"
            ],
            "gallery_image": [
                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/step4-big.jpg"
            ],
            "gallery_title": [
                "test"
            ],
            "location_lat": "32",
            "location_long": "17",
            "location_title": "test location title cebu",
            "location_image": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Bg_geometric.jpg",
            "city": {
                "id": 173,
                "name": "Cebu City",
                "body": ""
            },
            "area": {
                "id": 170,
                "name": "Visayas",
                "body": ""
            },
            "unitplans_image": [
                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/110pixels.jpg"
            ],
            "unitplans_title": [
                "unitplans"
            ],
            "ios_video": "ios_video_test",
            "and_video": "and_video",
            "last_updated": "2019-01-16 03:31:00"
        }
    ],
    "meta": {
        "message": "Got All Data",
        "code": 200
    }
}

```

# Get Single Project


**URL** : `/api/projects/single_project/{project_id}`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**

project_id : 174

```json
{
    "data": {
        "id": 174,
        "prop": "proj in cebu",
        "property_type": "houseandlot",
        "menuImage": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/samplethumb.jpeg",
        "prop_logo": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Optimind02.png",
        "cover_image": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Ken_Kaneki3.png",
        "ov_description": "test ov description cebu",
        "overview": "<p><strong>test ov cebu</strong></p>\n",
        "overview_image": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/samplethumb.jpeg",
        "amen_titles": [
            "amen1"
        ],
        "amen_images": [
            "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/1200x900.jpg"
        ],
        "floorplan_image": [
            "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Macy-Floor-Plan.jpg"
        ],
        "floorplan_title": [
            "floor"
        ],
        "gallery_image": [
            "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/step4-big.jpg"
        ],
        "gallery_title": [
            "test"
        ],
        "location_lat": "32",
        "location_long": "17",
        "location_title": "test location title cebu",
        "location_image": "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Bg_geometric.jpg",
        "city": {
            "id": 173,
            "name": "Cebu City",
            "body": ""
        },
        "area": {
            "id": 170,
            "name": "Visayas",
            "body": ""
        },
        "unitplans_image": [
            "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/110pixels.jpg"
        ],
        "unitplans_title": [
            "unitplans"
        ],
        "ios_video": "ios_video_test",
        "and_video": "and_video",
        "last_updated": "2019-01-16 03:31:00"
    },
    "meta": {
        "message": "Single Project retrieved",
        "code": 200
    }
}
```

# Get All Areas


**URL** : `/api/areas`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**

```json
{
    "data": [
        {
            "id": 170,
            "area_name": "Visayas",
            "cities": [
                {
                    "id": 173,
                    "city_name": "Cebu City",
                    "projects": [
                        {
                            "id": 232,
                            "project_name": "another project in makati",
                            "coverimages_title": [
                                "test"
                            ],
                            "coverimages_image": [
                                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Optimind02.png"
                            ],
                            "excerpt": ""
                        },
                        {
                            "id": 174,
                            "project_name": "proj in cebu",
                            "coverimages_title": [
                                "cebucover"
                            ],
                            "coverimages_image": [
                                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Optimind02.png"
                            ],
                            "excerpt": ""
                        }
                    ]
                }
            ]
        },
        {
            "id": 32,
            "area_name": "Metro Manila",
            "cities": [
                {
                    "id": 171,
                    "city_name": "Makati City",
                    "projects": [
                        {
                            "id": 172,
                            "project_name": "proj in makati",
                            "coverimages_title": [],
                            "coverimages_image": [],
                            "excerpt": ""
                        },
                        {
                            "id": 156,
                            "project_name": "Aspira",
                            "coverimages_title": [
                                "test"
                            ],
                            "coverimages_image": [
                                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Optimind02.png"
                            ],
                            "excerpt": ""
                        }
                    ]
                },
                {
                    "id": 75,
                    "city_name": "Quezon City",
                    "projects": [
                        {
                            "id": 172,
                            "project_name": "proj in makati",
                            "coverimages_title": [],
                            "coverimages_image": [],
                            "excerpt": ""
                        },
                        {
                            "id": 156,
                            "project_name": "Aspira",
                            "coverimages_title": [
                                "test"
                            ],
                            "coverimages_image": [
                                "http://avidaapp.betaprojex.com/wp-content/uploads/2019/01/Optimind02.png"
                            ],
                            "excerpt": ""
                        }
                    ]
                }
            ]
        }
    ],
    "meta": {
        "message": "Got All Data",
        "code": 200
    }
}

```
# Get Area By Id


**URL** : `/api/areas/{area_id}`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**

```json
{
    "data": {
        "ID": 32,
        "post_author": "0",
        "post_date": "2019-01-11 03:27:25",
        "post_date_gmt": "2019-01-11 03:27:25",
        "post_content": "",
        "post_title": "Metro Manila",
        "post_excerpt": "",
        "post_status": "publish",
        "comment_status": "closed",
        "ping_status": "closed",
        "post_password": "",
        "post_name": "metro-manila",
        "to_ping": "",
        "pinged": "",
        "post_modified": "2019-01-11 03:27:25",
        "post_modified_gmt": "2019-01-11 03:27:25",
        "post_content_filtered": "",
        "post_parent": 0,
        "guid": "http://avidaapp.betaprojex.com/?post_type=area&#038;p=32",
        "menu_order": 0,
        "post_type": "area",
        "post_mime_type": "",
        "comment_count": "0",
        "filter": "raw"
    },
    "meta": {
        "message": "Area Retrieved",
        "code": 200
    }
}
```
# Get All Cities


**URL** : `/api/cities`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**

```json
{
    "data": [
        {
            "id": 173,
            "name": "Cebu City",
            "body": ""
        },
        {
            "id": 171,
            "name": "Makati City",
            "body": ""
        },
        {
            "id": 75,
            "name": "Quezon City",
            "body": ""
        }
    ],
    "meta": {
        "message": "Got All Data",
        "code": 200
    }
}
```
# Get City By Id

**URL** : `/api/cities/{city_id}`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**
city_id: 173
```json
{
    "data": {
        "ID": 173,
        "post_author": "0",
        "post_date": "2019-01-16 03:28:29",
        "post_date_gmt": "2019-01-16 03:28:29",
        "post_content": "",
        "post_title": "Cebu City",
        "post_excerpt": "",
        "post_status": "publish",
        "comment_status": "closed",
        "ping_status": "closed",
        "post_password": "",
        "post_name": "cebu-city",
        "to_ping": "",
        "pinged": "",
        "post_modified": "2019-01-16 04:04:57",
        "post_modified_gmt": "2019-01-16 04:04:57",
        "post_content_filtered": "",
        "post_parent": 0,
        "guid": "http://avidaapp.betaprojex.com/?post_type=city&#038;p=173",
        "menu_order": 0,
        "post_type": "city",
        "post_mime_type": "",
        "comment_count": "0",
        "filter": "raw"
    },
    "meta": {
        "message": "City Retrieved",
        "code": 200
    }
}

```
# Get Cities By Area Id


**URL** : `/api/cities/area/{area_id}`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**
area_id: 32
```json
{
    "data": [
        {
            "id": 171,
            "name": "Makati City",
            "body": ""
        },
        {
            "id": 75,
            "name": "Quezon City",
            "body": ""
        }
    ],
    "meta": {
        "message": "Got All Data",
        "code": 200
    }
}
```
# Get All Notifications


**URL** : `/api/notifications`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**

```json
{
    "data": [{
        "id": 340,
        "title": "notification title",
        "body": "notification text"
    }],
    "meta": {
        "message": "Got all data.",
        "code": 200
    }
}
```
# Get Notification By Id

**URL** : `/api/notification/{notification_id}`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**
city_id: 340
```json
{
    "data": {
        "id": 340,
        "title": "notification title",
        "body": "notification text"
    },
    "meta": {
        "code": 200
    }
}
```


# Get About Us Content


**URL** : `/api/about`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**
```json
{
    "data": {
        "title": "About Us",
        "content": "<strong>Transforming land, names, and lives</strong>\r\n\r\nsince it developed the vast tract of swamp land that is now the bustling city of Makati\r\n\r\n&nbsp;\r\n\r\n&nbsp;"
    },
    "meta": {
        "code": 200
    }
}
```

# Get Privacy Policy Content


**URL** : `/api/privacy_policy`

**Method** : `GET`

**Auth required** : YES

## Success Response

**Code** : `200 OK`

**Sample Content**
```json
{
    "data": {
        "title": "Privacy Policy",
        "content": "<div>\r\n<div><strong>1. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione incidunt aut rerum cupiditate accusantium corporis</strong></div>\r\n<div>\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione incidunt aut rerum cupiditate accusantium corporis\r\n<div>\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione incidunt aut rerum cupiditate accusantium corporis\r\n<div>\r\n<div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione incidunt aut rerum cupiditate accusantium corporis</div>\r\n<div><strong>2. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione incidunt aut rerum cupiditate accusantium corporis</strong></div>\r\n<div>\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione incidunt aut rerum cupiditate accusantium corporis\r\n<div>\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione incidunt aut rerum cupiditate accusantium corporis\r\n<div>\r\n<div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione incidunt aut rerum cupiditate accusantium corporis</div>\r\n</div>\r\n<div>\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione incidunt aut rerum cupiditate accusantium corporis\r\n<div>\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione incidunt aut rerum cupiditate accusantium corporis\r\n<div>\r\n<div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione incidunt aut rerum cupiditate accusantium corporis</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n&nbsp;\r\n\r\n&nbsp;"
    },
    "meta": {
        "code": 200
    }
}
```

