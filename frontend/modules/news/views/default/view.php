<?php
/* @var $news*/

$this->title = $news->title;

?>


<section class="content">
    <div class="container">
        <div class="row">
            <div class="content__press">
                <h3 class="section--title"><span>Новости</span></h3>
                <div class="col-lg-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="content__press--main">
                            <div class="content__press--main__img">
                                <?php if(!empty($news->images)): ?>
                                    <img src="<?= $news->images;?>" alt=""/>
                                <?php endif; ?>
                                <p class="content__press--main__date"><?= date('d-m-Y'); ?></p>

                                <p class="content__press--main__imgtext"><?= $news->title; ?></p>

                            </div>

                            <!--<div class="content__press--main__social">
                                <a href="#">
                                    <i class="fa fa-facebook-official">Like</i>
                                </a>
                            </div>-->
                            <div class="content__press--main__social">
                                <a href="#">
                                    <i class="fa fa-facebook-official">SHARE</i>
                                </a>
                            </div>
                            <div class="content__press--main__social">
                                <a href="#" onclick="window.open('http://vkontakte.ru/share.php?url='+encodeURIComponent(location.href));return false;" rel="nofollow" style="text-decoration:none;" title="Поделиться ВКонтакте">
                                    <i class="fa fa-vk">SHARE</i>
                                </a>
                            </div>
                            <div class="content__press--main__social">
                                <a href="#">
                                    <i class="fa fa-twitter">SHARE</i>
                                </a>
                            </div>
                            <div class="content__press--main__about">
                                <?= $news->text; ?>
                            </div>
                            <?= \frontend\modules\news\widget\ReadMore::widget(['newsId' => $news->id]); ?>



                        </div>

                    </div>
                </div>


                <div class="col-lg-4 col-sm-4 col-xs-hidden">
                    <div class="row">

                        <div class="content__press--sidebar">
                            <img src="/img/music.png" alt=""/>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

