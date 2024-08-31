<?php

namespace App\Http\Controllers\Games\SpinData\FortuneTiger;

class FortuneTigerDemo
{
    /**
     * @return array
     */
    public static function getDemo(): array
    {
        return [

            [
                [
                    "Symbol_3",
                    "Symbol_0",
                    "Symbol_4",
                    "Symbol_3",
                    "Symbol_0",
                    "Symbol_4",
                    "Symbol_4",
                    "Symbol_0",
                    "Symbol_5"
                ],
                [7, 5, 3],
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_4",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 10,
                        "multiply" => 0,
                        "win_amount" => 4,
                        "active_icon" => [
                            7,
                            5,
                            3
                        ]
                    ]
                ],
                [],
                2,
                30
            ],
            [
                [
                    "Symbol_2", "Symbol_5", "Symbol_0", "Symbol_5", "Symbol_0", "Symbol_4", "Symbol_2", "Symbol_4", "Symbol_3"
                ],
                [7, 5, 3],
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_2",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 30,
                        "multiply" => 0,
                        "win_amount" => 4,
                        "active_icon" => [
                            7,
                            5,
                            3
                        ]
                    ]
                ],
                [],
                2,
                30
            ],
        
            [
                [
                    "Symbol_3", "Symbol_4", "Symbol_2", "Symbol_6", "Symbol_0", "Symbol_5", "Symbol_2", "Symbol_2", "Symbol_4"
                ],
                [7, 5, 3],
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_2",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 15,
                        "multiply" => 0,
                        "win_amount" => 9,
                        "active_icon" => [
                            7,
                            5,
                            3
                        ]
                    ]
                ],
                [],
                6,
                30
            ],

            [
                [
                    "Symbol_2", "Symbol_2", "Symbol_5", "Symbol_5", "Symbol_5", "Symbol_2", "Symbol_5", "Symbol_1", "Symbol_5"
                ],
                [7, 5, 3],
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_5",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 50,
                        "multiply" => 0,
                        "win_amount" => 10,
                        "active_icon" => [
                            7,
                            5,
                            3
                        ]
                    ]
                ],
                [],
                0,
                50
            ],
            [
                [
                    "Symbol_3", "Symbol_0", "Symbol_2", "Symbol_3", "Symbol_0", "Symbol_3", "Symbol_5", "Symbol_4", "Symbol_5"
                ],
                [4, 5, 6],
                //SUPERWIN 1:20
                [
                    [
                        "index" => 1,
                        "name" => "Symbol_3",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 100,
                        "multiply" => 0,
                        "win_amount" => 50,
                        "active_icon" => [
                            4,
                            5,
                            6
                        ]
                    ]
                ],
                [],
                0,
                100
            ],
            [
                [
                    "Symbol_4", "Symbol_1", "Symbol_3", "Symbol_6", "Symbol_0", "Symbol_5", "Symbol_3", "Symbol_1", "Symbol_5"
                ],
                [7, 5, 3],
                //SUPERMEGAWIN 1:20 diferente
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_3",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 100,
                        "multiply" => 0,
                        "win_amount" => 20,
                        "active_icon" => [
                            7,
                            5,
                            3
                        ]
                    ]
                ],
                [],
                0,
                100
            ],


        ];
    }
}
