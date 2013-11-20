</td></tr><tr> 
    <td colspan="3"> 
        <b>Project:</b>  <?=$data->_project->name != '' ? $data->_project->name : 'none'?><br />
    </td>
    <td colspan="2"> 
        <?=$data->_users->lordContacts?><br />
    </td>
    <td colspan="1">
        <b>Comision:</b> <?=$data->comision?>%<br />
        <b>Price before offer:</b> <?=$data->price2?> &euro;<br />
        <b>Distance to the sea:</b> <?=$data->disttosea * 1000?> m
    </td>
    <td colspan="2">
        <b>Floor(s):</b> <?=$data->floor?><br />
        <b>Beadrooms:</b> <?=$data->nobed?><br />
        <b>Bathrooms:</b> <?=$data->nobath?><br /> 