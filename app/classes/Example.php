<?php


namespace App\classes;


class Example
{
    public $name;
    public $data = [];

    public function index(){

//        $this->data = [10, 20, 30, 'BITM', 'BASIS', 100.200, true];
////        echo $this->data[5];
//
//        foreach ($this->data as $key => $item)
//        {
//            echo $key.' '.$item.'<br/>';
//        }


        $this->data = [
            0 => [
                'name' => 'Sagor',
                'email' => 'sagor@gmail.com',
                'mobile' => [
                    'personal' => '123455',
                    'parent'   => '112233'
                ]
            ],
            1 => [
                'name' => 'Faysal',
                'email' => 'faysal@gmail.com',
                'mobile' => [
                    'personal' => '12385884',
                    'parent'   => '33382753'
                ]
            ],
            2 => [
                'name' => 'Akash',
                'email' => 'akash@gmail.com',
                'mobile' => [
                    'personal' => '65784483',
                    'parent'   => '64647667'
                ]
            ],
            3 => 'BITM',
            4 => [
                'name' => 'Sojib',
                'email' => 'sojib@gmail.com',
                'mobile' => '774766'
            ]
        ];

//        echo $this->data[1]['name'];
//        foreach ($this->data as $item)
//        {
//            if (is_array($item)) {
//                foreach ($item as $value)
//                    if (is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo $v_value . ' ';
//                        }
//                    } else {
//                        echo $value;
//                    }
//            }
//                else {
//                    echo $item;
//
//            }
////            echo $item['name'].' '.$item['email'].' '.$item['mobile'].'<br/>';
//
//            echo '<br/>';
//      }

        echo '<pre>';
//        print_r($this->data);
        var_dump($this->data);

    }

}