<div class="right-sidebar">
    <div id="tab-container">
        <ul class="icons">
            <li><a class="active" href="#general"><i class="icon-th-large"></i></a></li>
            <li><a href="#tab1"><i class="icon-user"></i></a></li>
            <li><a href="#tab2"><i class="icon-inbox"></i></a></li>
        </ul>

        <!-- ======= General tab start ======= -->
        <div id="general" class="tab">
            <div class="langs">
                <a href="/site/index?lng=en&url=<?= Yii::app()->request->requestUri ?>"><img src="/img/en.png" width="30px" /></a>
                <a href="/site/index?lng=ru&url=<?= Yii::app()->request->requestUri ?>"><img src="/img/ru.png" width="30px" /></a> 
                <a href="/site/index?lng=zh&url=<?= Yii::app()->request->requestUri ?>"><img src="/img/ch.png" width="30px" /></a>
            </div>
            <div class="divider"><span></span></div>

            <div class="sideWidget">
                <div class="inlinedate"></div>
            </div>

        </div>
        <!-- ======= General tab end ======= -->

        <!-- ======= Tab1 start ======= -->
        <div id="tab1" class="tab">
            <div class="sidebar-inner">
                <a href="#" class="btn btn-block btn-danger"><i class="icon-white icon-plus"></i> Add New Session</a>
            </div>

            <div class="sidebar-inner">logoff
                <a href="#" class="btn btn-block btn-success"><i class="icon-white icon-plus"></i> New Orders</a>
            </div>

            <div class="divider"><span></span></div>

            <h2 class="heading"><i class="icon-th"></i> Simple jquery tree</h2>
            <div class="filetree"></div>

            <div class="divider"><span></span></div>

            <ul class="users">
                <li><a href="#">
                        <img src="/img/chat-avatar-1.png" alt="">
                        <span class="name">
                            <strong>Lejla Fejzic</strong><br>
                            graphic designer
                        </span>
                        <span class="away"></span>
                        <div class="clear"></div>
                    </a></li>
                <li><a href="#">
                        <img src="/img/chat-avatar.png" alt="">
                        <span class="name">
                            <strong>Bernad Delic</strong><br>
                            web developer
                        </span>
                        <span class="offline"></span>
                        <div class="clear"></div>
                    </a></li>
                <li><a href="#">
                        <img src="/img/chat-avatar-1.png" alt="">
                        <span class="name">
                            <strong>John Smith</strong><br>
                            system administrator
                        </span>
                        <span class="online"></span>
                        <div class="clear"></div>
                    </a></li>
            </ul>

            <div class="divider"><span></span></div>

            <div class="sideWidget">
                <div class="inlinedate"></div>
            </div>

            <div class="divider"><span></span></div>

            <div class="sidebar-inner">
                <div class="row-fluid">   
                    <div class="span6">         
                        <a href="#" class="btn btn-block btn-info">New users</a>
                    </div>

                    <div class="span6">         
                        <a href="#" class="btn btn-block btn-primary">Messages</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- ======= Tab1 end ======= -->

        <!-- ======= Tab2 start ======= -->
        <div id="tab2" class="tab">
            <div class="sidebar-inner">
                <a href="#" class="btn btn-block btn-danger"><i class="icon-white icon-plus"></i> Add New Session</a>
            </div>

            <div class="sidebar-inner">
                <a href="#" class="btn btn-block btn-success"><i class="icon-white icon-plus"></i> New Orders</a>
            </div>

            <div class="divider"><span></span></div>

            <div class="sidebar-inner">
                <span class="input_label">Simple input field:</span>
                <input type="text" class="simple_input">
            </div>

            <div class="sidebar-inner">
                <span class="input_label">Simple password field:</span>
                <input type="password" class="simple_input">
            </div>

            <div class="sidebar-inner">
                <span class="input_label">Simple upload field:</span>
                <input type="file" class="simple_input">
            </div>

            <div class="sidebar-inner">
                <span class="input_label">Dropdown menu:</span>
                <select class="uniform">
                    <option>Usual select box</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                    <option>Option 6</option>
                    <option>Option 7</option>
                    <option>Option 8</option>
                </select>
            </div>

            <div class="sidebar-inner">
                <span class="input_label">Dropdown menu with search:</span>
                <select class="select">
                    <option>Usual select box</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                    <option>Option 6</option>
                    <option>Option 7</option>
                    <option>Option 8</option>
                    <option>Option 9</option>
                    <option>Option 10</option>
                    <option>Option 11</option>
                    <option>Option 12</option>
                    <option>Option 13</option>
                    <option>Option 14</option>
                    <option>Option 15</option>
                </select>
            </div>

            <div class="sidebar-inner nSearch">
                <span class="input_label">Dropdown menu without search:</span>
                <select class="select">
                    <option>Usual select box</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                </select>
            </div>

            <div class="sidebar-inner">
                <input type="checkbox" /> <span class="button_label">Checkbox</span>
            </div>

            <div class="sidebar-inner">
                <input type="radio" /> <span class="button_label">Radio</span>
            </div>

            <div class="sidebar-inner">
                <span class="input_label">Textarea:</span>
                <textarea name="msg" class="simple_textarea"></textarea>
            </div>

            <div class="divider"><span></span></div>

            <div class="sideWidget">
                <div class="inlinedate"></div>
            </div>

            <div class="divider"><span></span></div>

            <div class="sidebar-inner">
                <div class="row-fluid">   
                    <div class="span6">         
                        <a href="#" class="btn btn-block btn-info">New users</a>
                    </div>

                    <div class="span6">         
                        <a href="#" class="btn btn-block btn-primary">Messages</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- ======= Tab2 end ======= -->

    </div>
</div>