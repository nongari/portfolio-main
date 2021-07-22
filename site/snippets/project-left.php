<div class="grid metalist">
    
        <div id="items-1" class="col-3">

        <?php foreach ($site->children()->template('project-left') as $project): ?>
            
            <div id="<?= $project->title() ?>" class="list-group-item nested-1 capsule">
                <i class="handle">
                    <?= asset('assets\images\handle.svg')->read() ?>
                </i>
                <?= $project->title() ?>
                
                <div class="panel">
                    <p><?= $project->text()->toBlocks() ?></p>
                    
                </div>
            </div>


        <?php endforeach ?>
            
        </div>