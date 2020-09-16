#Put this code in your functions.php file and then load any page on your site.

$slugs = array('test-post-1','test-post-2'); #Fill this in with all the slugs of your posts you want set to draft.

foreach($slugs as $slug){
$posts = get_posts($args = array('name' => $slug,'numberposts' => 1));

foreach($posts as $post){
#echo "Values Before Setting <br>";
#echo "Post ID: " . $post->ID . "</br>";
#echo "Post Status: " . $post->post_status . "</br>";
$post->post_status = 'draft';
wp_update_post($post);
#echo "Values After Setting <br>";
#echo "Post ID: " . $post->ID . "</br>";
#echo "Post Status: " . $post->post_status . "</br>";

#You can un-comment out the above comments if you are using a standalone .php file and want to see the status updates.  
#If you are using a standalone php file (and not functions.php), remember you'll need to include: require ('./wp-blog-header.php');
#Otherwise just put the code in your functions.php file
}

}
