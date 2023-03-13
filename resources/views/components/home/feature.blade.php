@props(['title', 'paragraph', 'icon', 'transition'])
<div class="col-sm-6 col-xl-3">
    <div class="icon_boxes d-flex wow fadeInUp" data-wow-duration={{ $transition }}>
        <div class=icon><span class={{ "flaticon-{$icon}" }}></span></div>
        <div class=details>
            <h5 class=title>{{ $title }}</h5>
            <p class=para>{{ $paragraph }}.</p>
        </div>
    </div>
</div>
