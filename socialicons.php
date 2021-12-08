<div class="fixed-bottom" style="z-index: 50;">
    <div class="container">
        <div class="text-center pb-2">
            <a target="_blank" href="https://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" class="text-decoration-none px-2" title="facebook"><span class="icon icon-facebook" style="color: #3B5998; font-size: 1.8rem;" title="facebook"></span></a>
            <a target="_blank" href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>" class="text-decoration-none px-2"><span class="icon icon-line" style="color: #06C755; font-size: 1.8rem;"></span></a>
            <a target="_blank" href="https://twitter.com/share?url=<?php echo get_the_permalink();?>&text=<?php echo get_the_title();?>" class="text-decoration-none px-2"><span class="icon icon-twitter" style="color: #1DA1F2; font-size: 1.8rem;"></span></a>
            <a target="_blank" href="https://b.hatena.ne.jp/entry/panel/?url=<?php echo get_the_permalink();?>" class="text-decoration-none px-2"><span class="icon icon-hatena" style="color: #00a4de; font-size: 1.8rem;"></span></a>
            <a data-bs-toggle="modal" data-bs-target="#modalLink" style="cursor: pointer;"><span class="icon icon-paperclip-solid" style="color: #999; font-size: 1.8rem;"></span></a>
        </div>
    </div>
</div>                                
<div class="modal fade" id="modalLink" tabindex="-1" aria-labelledby="modalLinkLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalLinkLabel">リンクのコピー</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="text" class="form-control" value="<?php echo get_the_permalink();?>" onclick="this.focus();this.select();" >
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
        </div>
        </div>
    </div>
</div>
