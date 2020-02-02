<section class="hero is-dark">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                ระบายออกมา
            </h1>
            <h2 class="subtitle">
                โพสแบบไม่ระบุตัวตน ไม่ต้องกลัวใครรู้
            </h2>
            <form action="<?php echo $controller_route; ?>" method="post">
                <div class="field has-addons">
                    <p class="control">
                        <input name="pot_post" class="input" type="text" placeholder="ค้นหาโพส...">
                    </p>
                    <p class="control">
                        <button class="button" type="submit">
                            ค้นหา
                        </button>
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

<div class="container">
    <section class="section">
        <form id="post_comment_form" action="<?php echo $controller_route.'add'; ?>" method="post">
            <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="<?php echo base_url('assets/images/avatar.png') ?>">
                    </p>
                </figure>
                <div class="media-content">
                    <div class="field">
                        <p class="control">
                            <textarea id="post_comment_textarea" oninput="onCheckIdHandler('post_comment_checkbox',onEnterToSubmit(event,'post_comment_form'))" name="pot_post" class="textarea" placeholder="Add a comment..."></textarea>
                        </p>
                    </div>
                    <nav class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <button type="submit" class="button is-info">โพส</button>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <label class="checkbox">
                                    <input id="post_comment_checkbox" type="checkbox"> กด Enter เพื่อโพส
                                </label>
                            </div>
                        </div>
                    </nav>
                    <nav class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <span class="tag is-danger">*** หากถูกรายงานเกิน 5 ครั้ง จะถูกลบโพสโดยอัตโนมัติ</span>
                            </div>
                        </div>
                    </nav>
                </div>
            </article>
        </form>
        <hr>
    </section>
    <?php foreach ($posts as $post) { ?>
        <section class="section">
            <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="<?php echo base_url('assets/images/avatar.png') ?>">
                    </p>
                </figure>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>ไม่ระบุตัวตน</strong> <small><?php echo $post->pot_stamp; ?></small>
                            <br>
                            <?php echo $post->pot_post; ?>
                        </p>
                    </div>
                    <nav class="level is-mobile">
                        <div class="level-left">
                            <a class="level-item">
                                <span class="icon is-small"><i class="fas fa-reply"></i></span>
                            </a>
                            <a class="level-item">
                                <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                            </a>
                            <a class="level-item">
                                <span class="icon is-small"><i class="fas fa-heart"></i></span>
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="media-right">
                    <form action="<?php echo $controller_route.'report'; ?>" method="post">
                        <input type="hidden" name="pot_id" value="<?php echo $post->pot_id; ?>">
                        <button type="submit" class="button is-danger">
                            รายงาน
                        </button>
                    </form>
                </div>
            </article>
            <hr>
        </section>
    <?php } ?>

</div>