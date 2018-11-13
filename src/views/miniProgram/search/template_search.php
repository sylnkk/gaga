

<script id="tpl-recommend-group" type="text/html">

    <div class="group_row"  groupId="{{groupId}}>
        <div class="group_info">
            <div class="group_detail_info">
                <div >
                    <img class="avatar" src="../../public/img/msg/default_user.png">
                </div>
                <div>
                    <div class="group_name">
                       {{groupName}}
                    </div>
                    <div class="group_owner">
                        群主：{{groupOwnerName}}
                    </div>
                </div>
            </div>
            <div class="add_group_button">
                <button class="join_group" groupId="{{groupId}}">一键加入</button>
            </div>
        </div>
    </div>
    <div class="line"></div>
</script>





<script id="tpl-search-user" type="text/html">
    <div class="item-row">
        <div class="item-header">
            <img class="user-avatar-image" avatar="{{avatar}}"
                 src=""
                 onerror="this.src='../../public/img/msg/default_user.png'"/>
        </div>
        <div class="item-body">
            <div class="item-body-display">
                <div class="item-body-desc" onclick="showUserChat('')">
                    {{loginName}}
                </div>

                <div class="item-body-tail">
                    {{if isFllow }}
                    <button class="chatButton" userId="">
                        发起会话
                    </button>
                    {{else}}

                    <button class="addButton applyButton" userId="">
                        添加好友
                    </button>
                    {{/if}}

                </div>
            </div>
        </div>
    </div>

    <div class="division-line"></div>

</script>