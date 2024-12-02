<?php
include_once("templates/header.php");

if(isset($_GET["id"])){

    $postID = $_GET["id"];
    $currentPost;

    foreach($posts as $post) {

        if($post["id"] == $postID){
            $currentPost = $post;
        }
    }
}


?>
<body>
    
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio accusamus distinctio quaerat, sapiente consequuntur accusantium facilis impedit tempore! Tempora cupiditate error quasi saepe laudantium quidem et quas ullam dolorem minima!
        Qui ab odit temporibus excepturi tempora delectus quaerat possimus natus ad. Quis officia iusto, iure incidunt ipsa, temporibus mollitia hic ut, veniam voluptates deleniti pariatur harum beatae fuga possimus fugiat?
        Nulla, esse excepturi? Nemo repellendus, quidem nihil quia adipisci maxime distinctio doloremque fugit deleniti quam, autem voluptatum quibusdam natus dolor iure voluptas nam reprehenderit corrupti deserunt tempora culpa! Nihil, quae!
        Error facere unde nisi dicta necessitatibus accusamus quos consequatur non beatae? Doloremque, quaerat harum delectus et asperiores excepturi vel quia. Eveniet, eos. Quas aperiam consequatur quae eveniet sunt soluta ratione?
        Nam, cumque soluta voluptatem recusandae sunt qui dolore consectetur sapiente laudantium fugit laboriosam mollitia beatae hic tenetur perferendis est excepturi sed doloremque quaerat quisquam assumenda iusto ducimus dolorum blanditiis. Facere!</p>
    
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio accusamus distinctio quaerat, sapiente consequuntur accusantium facilis impedit tempore! Tempora cupiditate error quasi saepe laudantium quidem et quas ullam dolorem minima!
        Qui ab odit temporibus excepturi tempora delectus quaerat possimus natus ad. Quis officia iusto, iure incidunt ipsa, temporibus mollitia hic ut, veniam voluptates deleniti pariatur harum beatae fuga possimus fugiat?
        Nulla, esse excepturi? Nemo repellendus, quidem nihil quia adipisci maxime distinctio doloremque fugit deleniti quam, autem voluptatum quibusdam natus dolor iure voluptas nam reprehenderit corrupti deserunt tempora culpa! Nihil, quae!
        Error facere unde nisi dicta necessitatibus accusamus quos consequatur non beatae? Doloremque, quaerat harum delectus et asperiores excepturi vel quia. Eveniet, eos. Quas aperiam consequatur quae eveniet sunt soluta ratione?
        Nam, cumque soluta voluptatem recusandae sunt qui dolore consectetur sapiente laudantium fugit laboriosam mollitia beatae hic tenetur perferendis est excepturi sed doloremque quaerat quisquam assumenda iusto ducimus dolorum blanditiis. Facere!</p>
    </div>
<aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
              <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
     </ul>
     <h3 id="categories-title">Categorias</h3>
     <ul id="categories-list">
     <?php foreach($categories as $category): ?>
              <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
     </ul>
</aside>
</main>
<?php   
 include_once("templates/footer.php");
 ?>