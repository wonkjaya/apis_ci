<?php
function get_table($tableName , $fieldName){
    if(!empty($tableName) && !empty($fieldName)){
        return "$tableName.$fieldName";
    }
}

function generate($table, $exclude){
    if(count($exclude) == 0) return $table;
    foreach($table as $k=>$v){
        $i = sprintf(array_search($k,$exclude));
        if($i == ''){
            $data[$k]=$v;
        }
    }
    return $data;
}

function products($exclude=[]){
    $table= [ 
        "prdid" => get_table(PRD,"ID"),
        "created" => get_table(PRD,"created"),
        "userid" => get_table(PRD,'id_user'),
        "code" => get_table(PRD,'kode_produk'),
        "slug" => get_table(PRD,'slug'),
        "name" => get_table(PRD,'nama_produk'),
        "catid" => get_table(PRD,'id_kategori'),
        "sale" => get_table(PRD,'harga_beli'),
        "buy" => get_table(PRD,'harga_jual'),
        "discount" => get_table(PRD,'diskon'),
        "status" => get_table(PRD,'status')
        ];
        return generate($table, $exclude);
}

function product_categories($exclude=[]){
    return [ 
        "catid" => get_table(CAT,"ID"),
        "catname" => get_table(CAT,'name'),
        "catstatus" => get_table(CAT,'status'),
        ];
}

function product_images($exclude=[]){
    return [ 
        "imgid" => get_table(IMG,"ID"),
        "prdid" => get_table(IMG,'id_produk'),
        "img1" => get_table(IMG,'image1'),
        "img2" => get_table(IMG,'image2'),
        "img3" => get_table(IMG,'image3'),
        "img4" => get_table(IMG,'image4'),
        "img5" => get_table(IMG,'image5'),
        ];
}

function product_description($exclude=[]){
    return [ 
        "desid" => get_table(DESCR,"ID"),
        "prdid" => get_table(DESCR,'id_produk'),
        "description" => get_table(DESCR,'image1'),
        "manbook" => get_table(DESCR,'image1'),
        "desstatus" => get_table(DESCR,'image1'),
        ];
}

function product_meta($exclude=[]){
    return [ 
        "metaid" => get_table(META,"ID"),
        "prdid" => get_table(META,'id_produk'),
        "key" => get_table(META,'key_meta'),
        "value" => get_table(META,'value'),
        ];
}

function make_fields($table=[]){
    if(count($table) > 0){
        foreach($table as $k=>$v){
            $field[]=($v." as ".$k);
        }
        return $field;
    }
}



function get_allowed_find_products_filter(){
     
}

?>