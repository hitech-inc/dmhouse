Тип: {{ $data['ltype'] }}
Телефон: {{ $data['phone'] }}

@if ($data['rtype'] == 'calculator')
<hr>
Тип объекта: {{ $data['object_type'] }}<br>
Площадь объекта: {{ $data['object_area'] }}<br>
Тип ремонта: {{ $data['repair_type'] }}<br>
Комментарий:<br>
{{ nl2br($data['comment']) }}
@endif
