<div class="qa-q-view-c-list" id="c8_list">
    <div class="qa-c-list-item " id="c10" itemscope="" itemtype="https://schema.org/Comment">
        <span class="qa-c-item-avatar-meta">
            <span class="qa-c-item-avatar">
                <img src="https://www.gravatar.com/avatar/467f366d9bdc4a8b4fd283512951d733" width="20" height="20" alt="avatar">
            </span>
            <span class="qa-c-item-meta">
                <a href="" class="qa-c-item-what" itemprop="url">{{ $data->getUser->name }}</a>
                <span class="qa-c-item-when">
                    <span class="qa-c-item-when-data">
                        <time itemprop="dateCreated" datetime="2020-01-29T00:06:33+0000" title="2020-01-29T00:06:33+0000">{{ $data->created_at }}</time>
                    </span>
                </span>
            </span>    
            <span class="qa-c-item-who">
                <span class="qa-c-item-who-pad">von </span>
                <span class="qa-c-item-who-data">
                    <a href="" class="qa-user-link">{{ $data->getUser->name }}</a>
                </span>
                <span class="qa-c-item-who-points">
                    <span class="qa-c-item-who-points-pad">(</span>
                    <span class="qa-c-item-who-points-data">200</span>
                    <span class="qa-c-item-who-points-pad"> Punkte)</span>
                </span>
            </span>
        </span>
        <div class="qa-c-item-clear">
        {!! $data->comment !!}
    </div>
</div>
</div>