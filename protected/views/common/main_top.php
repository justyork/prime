<div class="row-fluid" align="center">
    <a rel="tooltipup" href="/property" class="widget-button">
        <div class="widget-button-container">
            <div class="icon">
                <img src="/css/icons/iconsweet2/iconsweets_31.gif">
            </div>
            <div class="content">
                <p><?= Yii::t('app', 'prop_count') ?>:</p>
                <h2 class="red"><?= Property::model()->count(); ?></h2>
            </div>
        </div>
    </a>

    <a rel="tooltipup" href="/city" class="widget-button">
        <div class="widget-button-container">
            <div class="icon">
                <img src="/css/icons/iconsweet2/iconsweets_50.gif">
            </div>
            <div class="content">
                <p><?= Yii::t('app', 'city_count') ?>:</p>
                <h2 class="black"><?= City::model()->count(); ?></h2>
            </div>
        </div>
    </a>

    <a href="/users" class="widget-button">
        <div class="widget-button-container">
            <div class="icon">
                <img src="/css/icons/iconsweet2/iconsweets_179.gif">
            </div>
            <div class="content">
                <p><?= Yii::t('app', 'users_count') ?>:</p>
                <h2 class="green"><?= Users::model()->count(); ?></h2>
            </div>
        </div>
    </a>
</div>

<div class="divider"><span></span></div>

<div class="row-fluid" align="center">
    <a href="/" class="widget-button">
        <div class="widget-button-container">
            <div class="icon">
                <img src="/css/icons/iconsweet2/iconsweets_01.gif">
            </div>
            <div class="content">
               <p><?= Yii::t('app', 'projects_count') ?>:</p>
                <h2 class="red"><?= Property::model()->count(); ?></h2>
            </div>
        </div>
    </a>

    <div class="widget-button">
        <div class="widget-button-container">
            <div class="icon">
                <img src="/css/icons/iconsweet2/iconsweets_09.gif">
            </div>
            <div class="content">
                <p>Total downloads:</p>
                <h2 class="green">95,142</h2>
            </div>
        </div>
    </div>

    <div class="widget-button">
        <div class="widget-button-container">
            <div class="icon">
                <img src="/css/icons/iconsweet2/iconsweets_54.gif">
            </div>
            <div class="content">
                <p>Total uploads:</p>
                <h2 class="dark-orange">95,142</h2>
            </div>
        </div>
    </div>
</div>

<div class="divider"><span></span></div>

<div class="row-fluid">
    <div class="span12">
        <ul class="big-buttons" align="center">
            <li><a href="#"><div class="container"><img src="/css/icons/iconsweet2/iconsweets_54.gif"></div></a></li>
            <li><a href="#"><div class="container"><img src="/css/icons/iconsweet2/iconsweets_10.gif"></div></a></li>
            <li><a href="#"><div class="container"><img src="/css/icons/iconsweet2/iconsweets_29.gif"><span>8</span></div></a></li>
            <li><a href="#"><div class="container"><img src="/css/icons/iconsweet2/iconsweets_05.gif"></div></a></li>
            <li><a href="#"><div class="container"><img src="/css/icons/iconsweet2/iconsweets_31.gif"></div></a></li>
        </ul>
    </div>
</div>