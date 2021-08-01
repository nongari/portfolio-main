

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
                    
                    <div class="panel-container">
                        

                        <?php if ($project->multi()->toBool()): ?>

                        <div class="swiper-container mySwiper">

                            <div class="swiper-wrapper">

                                <?php foreach($project->images() as $projectimages): ?>

                                    <div class="swiper-slide">
                                        <figure>
                                            <img data-src="<?= $projectimages->url() ?>"  class="swiper-lazy" >
                                        </figure>
                                        
                                    </div>

                                <?php endforeach ?> 
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        <?php endif ?>    
                        
                        <?php if ($project->single()->toBool()): ?>

                            <?php foreach($project->images() as $projectimages): ?>
                                <img class="single" src="<?= $projectimages->url() ?>" >
                            <?php endforeach ?>
                            
                        <?php endif ?>

                        <?php if ($project->videon()->toBool()): ?>

                            <?php foreach($project->videos() as $videos): ?>
                                <video class="single" autoplay loop muted>
                                    <source src="<?= $videos->url() ?>">
                                </video>
                            <?php endforeach ?>
                            
                        <?php endif ?>

                        <div class="description"><?= $project->text()->toBlocks() ?></div>

                    </div>
                </div>

            </div>


        <?php endforeach ?>
            
        </div>