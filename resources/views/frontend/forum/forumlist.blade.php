
    <div class="qa-q-list">
        <div class="qa-q-list-item" id="q8">
            <div class="qa-q-item-stats">
                <div class="qa-voting qa-voting-net" id="voting_8">
                    <div class="qa-vote-buttons qa-vote-buttons-net">
                        <input title="Pluspunkt geben" name="vote_8_1_q8" onclick="return qa_vote_click(this);" type="submit" value="+" class="qa-vote-first-button qa-vote-up-button"> 
                        <input title="Minuspunkt geben" name="vote_8_-1_q8" onclick="return qa_vote_click(this);" type="submit" value="–" class="qa-vote-second-button qa-vote-down-button"> 
                    </div>
                    <div class="qa-vote-count qa-vote-count-net">
                        <span class="qa-netvote-count">
                            <span class="qa-netvote-count-data">0</span>
                            <span class="qa-netvote-count-pad"> Punkte</span>
                        </span>
                    </div>
                    <div class="qa-vote-clear"></div>
                </div>
                <span class="qa-a-count">
                    <span class="qa-a-count-data">{{ $forum->get_comments_count }}</span><span class="qa-a-count-pad"> Antwort</span>
                </span>
            </div>
            <div class="qa-q-item-main">
                <div class="qa-q-item-title">
                    <a href="{{ url('forum') }}/{{ $forum->id }}/<?= str_replace(" ", '_', $forum->title); ?>">{{ $forum->title }}</a>
                </div>
                <span class="qa-q-item-meta">
                    <span class="qa-q-item-what">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Asked </font>
                        </font>
                    </span>
                    <font style="vertical-align: inherit;">
                        <span class="qa-q-item-when">
                            <span class="qa-q-item-when-data">
                                <font style="vertical-align: inherit;">{{ $forum->created_at }} </font>
                            </span>
                        </span>
                        <span class="qa-q-item-who">
                            <span class="qa-q-item-who-pad">
                                <font style="vertical-align: inherit;">by </font>
                            </span>
                        </span>
                        <span class="qa-q-item-who">
                            <span class="qa-q-item-who-data">
                                <a href="/" class="qa-user-link">
                                    <font style="vertical-align: inherit;">{{ $forum->getUser->name }} </font>
                                </a>
                            </span>
                        </span>
                        <span class="qa-q-item-who">
                            <span class="qa-q-item-who-points">
                                <span class="qa-q-item-who-points-pad">
                                    <font style="vertical-align: inherit;">( </font>
                                </span>
                            </span>
                        </span>
                        <span class="qa-q-item-who">
                            <span class="qa-q-item-who-points">
                                <span class="qa-q-item-who-points-data">
                                    <font style="vertical-align: inherit;">200 </font>
                                </span>
                            </span>
                        </span>
                        <span class="qa-q-item-who">
                            <span class="qa-q-item-who-points">
                                <span class="qa-q-item-who-points-pad">
                                    <font style="vertical-align: inherit;">points)</font>
                                </span>
                            </span>
                        </span>
                    </font>
                    <span class="qa-q-item-when">
                        <span class="qa-q-item-when-data">
                            <font style="vertical-align: inherit;"></font>
                        </span>
                    </span>
                    <span class="qa-q-item-who">
                    <span class="qa-q-item-who-pad">
                        <font style="vertical-align: inherit;"></font>
                    </span>
                    <span class="qa-q-item-who-data" style="display:none">
                        <a href="./user/mathelist_abi" class="qa-user-link">
                            <font style="vertical-align: inherit;"></font>
                        </a>
                    </span>
                    <span class="qa-q-item-who-points">
                        <span class="qa-q-item-who-points-pad">
                            <font style="vertical-align: inherit;"></font>
                        </span>
                        <span class="qa-q-item-who-points-data">
                            <font style="vertical-align: inherit;"></font>
                        </span>
                        <span class="qa-q-item-who-points-pad">
                            <font style="vertical-align: inherit;"></font>
                        </span>
                    </span>
                </span>
                </span>
                <div class="qa-q-item-tags" style="display:none">
                    <ul class="qa-q-item-tag-list">
                        <li class="qa-q-item-tag-item">
                            <a href="./tag/wurzelrechnung" class="qa-tag-link">wurzelrechnung</a>
                        </li>
                    </ul>
                </div> 
            </div>
            <div class="qa-q-item-clear"></div>
        </div>
    </div>