

<div class="grid metalist">
    
        <div id="items-1" class="col-4">

        <?php foreach ($site->children()->template('project-left') as $project): ?>
            
            <div id="<?= $project->title() ?>" class="list-group-item nested-1">
                <div class="accordion light">

                    <div class="element">

                        <i class="handle">
                            <?= asset('assets\images\handle.svg')->read() ?>
                        </i>
                        <h2><?= $project->title() ?></h2>

                    </div>
                </div>
                
                <div class="panel">
                    <div class="description"><?= $project->text()->toBlocks() ?></div>

                    <div class="swiper-container mySwiper">

                        <div class="swiper-wrapper">

                            <?php foreach($project->images() as $projectimages): ?>

                                <div class="swiper-slide">
                                    <img src="<?= $projectimages->url() ?>" >
                                </div>

                            <?php endforeach ?> 
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

            </div>


        <?php endforeach ?>
            
        </div>