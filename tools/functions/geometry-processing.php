<?php
/**
 * Geometry Processing
 * http://postgis.net/docs/reference.html#Geometry_Processing
 */
return array(
    'ST_Buffer' => array(
        'required_arguments' => 2,
        'total_arguments' => 3,
        'tests' => array(
            'queries' => array(
                array(
                    'sql' => "SELECT ST_AsText(ST_Buffer(ST_GeomFromText('POINT(100 90)'), 50, 'quad_segs=8'))",
                    'result' => array(
                        1 => 'POLYGON((150 90,149.039264020162 80.2454838991936,146.193976625564 70.8658283817455,141.573480615127 62.2214883490199,135.355339059327 54.6446609406727,127.77851165098 48.4265193848728,119.134171618255 43.8060233744357,109.754516100806 40.9607359798385,100 40,90.2454838991937 40.9607359798385,80.8658283817456 43.8060233744356,72.22148834902 48.4265193848727,64.6446609406727 54.6446609406725,58.4265193848728 62.2214883490198,53.8060233744357 70.8658283817454,50.9607359798385 80.2454838991934,50 89.9999999999998,50.9607359798384 99.7545161008062,53.8060233744356 109.134171618254,58.4265193848726 117.77851165098,64.6446609406725 125.355339059327,72.2214883490197 131.573480615127,80.8658283817453 136.193976625564,90.2454838991934 139.039264020161,99.9999999999998 140,109.754516100806 139.039264020162,119.134171618254 136.193976625564,127.77851165098 131.573480615127,135.355339059327 125.355339059327,141.573480615127 117.77851165098,146.193976625564 109.134171618255,149.039264020162 99.7545161008065,150 90))'
                    )
                ),
                array(
                    'sql' => "SELECT ST_NPoints(ST_Buffer(ST_GeomFromText('POINT(100 90)'), 50)) As promisingcircle_pcount, ST_NPoints(ST_Buffer(ST_GeomFromText('POINT(100 90)'), 50, 2)) As lamecircle_pcount",
                    'result' => array(
                        'promisingcircle_pcount' => 33,
                        'lamecircle_pcount' => 9
                    ),
                )
            )
        )
    ),
    'ST_Intersection' => array(
        'required_arguments' => 2,
        'total_arguments' => 2,
        'tests' => array(
            'queries' => array(
                array(
                    'sql' => "SELECT ST_AsText(ST_Intersection(ST_GeomFromText('POINT(0 0)'), ST_GeomFromText('LINESTRING (0 0, 0 2)')))",
                    'result' => array(
                        1 => 'POINT(0 0)'
                    )
                )
            )
        )
    )
);