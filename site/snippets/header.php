<nav class="grid" id="header">
    <h1 class="intro"><?= $page->h1() ?></h1>
    <div class="capsule">
        <div>
            <?= asset('assets\images\triangle-a.svg')->read() ?>
        </div>
    </div>
    <div class="panel top-panel">
        <h1><?= $page->text() ?></h1>
        <div class="social">
            <a href="mailto: yong@yong-heekim.com">Email</a>
            /
            <a href="https://www.instagram.com/yong_hee___kim" target="_blank">Instagram</a>
            /
            <a href="https://www.are.na/yonghee-kim" target="_blank">Are.na</a>
        </div>
    </div>
    
    
    
</nav>
    <div id="control">
        <button id="expand-all" class="light h2">Expand All</button>
        <button id="close-all" class="light h2">Collapse All</button>
    </div>


