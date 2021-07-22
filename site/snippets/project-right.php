    
        <div id="items-2" class="col-3">

            <?php foreach ($site->children()->template('project-right') as $project): ?>

            <div id="<?= $project->title() ?>" class="list-group-item nested-1 capsule">
                <i class="handle">
                    <?= asset('assets\images\handle.svg')->read() ?>
                </i>
                <?= $project->title() ?>
            </div>

            <div class="panel">
                <p><?= $project->text()->toBlocks() ?></p>
            </div>

            <?php endforeach ?>
            
        </div>
</div>