<?php
/*
	Template Name: Tpl. Custom Page
*/
?>
<?php get_header();

// FIXME: если я добавил поле для страницы, а потом его удалил, то поле нужно отвязывать, иначе оно остается на этой же странице
// Регистрирую список компонентов ACF
$fieldsACF =  [
    '_banner', 
    '_products_preview', 
    '_faq', 
    '_news', 
    '_social', 
    '_gallary', 
];
$fields = array();

// Делаю проверку какой компонент есть на странице, и создаю массив с позицией блока на странице и полями компонента
foreach ($fieldsACF as $field) {

    if (have_rows($field)) {
        $getField = get_field($field);
        $fields[$field] = array(
            "fields" => $getField,
            "position" => $getField["position"]
        );
    }
}

function cmp_function($a, $b)
{
    return ($a['position'] > $b['position']);
}
// Делаю сортировку блоков По возрастанию:
uasort($fields, 'cmp_function');
// var_dump($fields);
?>

<main class="page">
    <?php foreach ($fields as $field => $value) {
        // echo $field;
        include(TEMPLATEPATH . "/components/$field/$field.component.php");
        
        // если захотим для какого-то конкретного поля сделать отдельный вывод шаблона
        // switch ($field) {
        //     case '_advantages':
        //         include(TEMPLATEPATH . '/components/advantages/advantages.component.php');
        //         break;
        //     case '_banner':
        //         include(TEMPLATEPATH . '/components/banner/banner.component.php');
        //         break;
        //     case '_slider_products':
        //         include(TEMPLATEPATH . '/components/products/products.component.php');
        //     default:
        //         echo "";
        // }
    } ?>
</main>

<?php get_footer(); ?>