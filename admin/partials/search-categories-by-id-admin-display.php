<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.helix.hr/
 * @since      1.0.0
 *
 * @package    Search_Categories_By_Id
 * @subpackage Search_Categories_By_Id/admin/partials
 */
?>

<div style="background-color:#fff; margin:40px 0 0 10px; padding:30px; min-height:200px; max-width:500px; color:#23282d; border: 1px solid #e5e5e5;">

	<h3 style="color:#23282d;">Pretraži kategorije po ID broju</h3>
	<br>
	<form method="post">
		Unesi ID kategorije:
		<input type="text" name="categoryid">
		<input type="submit" value="Submit" name="searchbtn">
	</form>

<?php

// Provjerava da li kategorija ima parrent kategoriju
function category_has_parent($catid){
    $category = get_category($catid);
    if ($category->category_parent > 0){
        return true;
    }
    return false;
}

// Provjerava da li kategorija ima children kategorije
function has_Children($cat_id)
{
    $children = get_terms(
        'category',
        array( 'parent' => $cat_id, 'hide_empty' => false )
    );
    if ($children){
        return true;
    }
    return false;
}

// If isset Submit button
if ( isset($_POST["searchbtn"]) ) {

	$category_name = get_the_category_by_ID( $_POST["categoryid"] );

	if ( category_exists(intval($_POST["categoryid"])) ) {
		echo '<br><br>Naziv kategorije: <strong>' . $category_name . '</strong><br>ID kategorije: <strong>' . $_POST["categoryid"] . '</strong><br>';
        
        $parrent = get_category( intval($_POST["categoryid"]) );
        if ($parrent->category_parent !== 0) {
            echo "<br>Matična kategorija: " . get_the_category_by_ID( $parrent->category_parent ) . '<br>';
            echo "ID matične kategorije: " . $parrent->category_parent;
            
        }

	} else {
		echo '<br><br>Kategorija s ID brojem <strong>' . $_POST["categoryid"] . '</strong> ne postoji!';
	}
}

/*if(category_has_parent(24)) {
    echo "ima parrent";
}*/

?>

</div>