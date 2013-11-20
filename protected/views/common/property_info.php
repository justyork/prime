    <h3>ID <?=$item->propid?></h3>
    <?=$item->_users->lordName?><br />
    <b>Project:</b>  <?=$item->_project->name != '' ? $item->_project->name : 'none'?><br /><br />
    
    <?=$item->_users->lordContacts?><br /><br />
    <b>Comision:</b> <?=$item->comision?>%<br />
    <b>Price before offer:</b> <?=$item->price2?> &euro;<br />
    <b>Distance to the sea:</b> <?=$item->disttosea * 1000?> m<br /><br />
    <b>Floor(s):</b> <?=$item->floor?><br />
    <b>Beadrooms:</b> <?=$item->nobed?><br />
    <b>Bathrooms:</b> <?=$item->nobath?><br />