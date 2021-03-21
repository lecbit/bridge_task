<?php
$group = [['Name'=>'Дима', 'Speed' => 3], ['Name'=>'Миша', 'Speed' => 6], ['Name'=> 'Андрей', 'Speed' =>12], ['Name'=>'Гена', 'Speed'=>24]];
shuffle($group);

echo '<pre>';
print_r($group);
echo '</pre>';

echo '<br><br>';
$max_id = 0;
$timer = 0;


for($i=0;$i<count($group)-1;$i++){
    if($group[$max_id]['Speed']>$group[$i+1]['Speed']){
        $timer += $group[$max_id]['Speed'];
    }
    else
    {
        $timer += $group[$i+1]['Speed'];
    }

    echo $group[$max_id]['Name'].': '.$group[$max_id]['Speed'].' и '.$group[$i+1]['Name'].': '.$group[$i+1]['Speed'].' перешли<br>';

    if($i==count($group)-2){
        break;
    }

    if($group[$max_id]['Speed']<$group[$i+1]['Speed']){
        echo 'Вернулся - '.$group[$max_id]['Name'].': '.$group[$max_id]['Speed'].'<br>';
        $timer += $group[$max_id]['Speed'];
    }
    else{
        echo 'Вернулся - '.$group[$i+1]['Name'].': '.$group[$i+1]['Speed'].'<br>';
        $max_id = $i+1;
        $timer += $group[$i+1]['Speed'];
    }
}

echo '<br><br>Минимальное время для четверых людей: '.$timer.' мин';