<?php

namespace App\Http\Controllers\Games\SpinData\FortuneRabbit;

class FortuneRabbitWin
{
    /**
     * @return array
     */
    public static function getWin(): array
    {
        return [
            [
                [
                    "Symbol_6", "Symbol_0", "Symbol_5", "Symbol_1",  "Symbol_0", "Symbol_6", "Symbol_1", "Symbol_0", "Symbol_6"
                ],
                [1, 5, 9],
                [
                    [
                        "index" => 4,
                        "name" => "Symbol_6",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 4,
                        "multiply" => 0,
                        "win_amount" => 0.8,
                        "active_icon" => [
                            1,
                            5,
                            9
                        ]
                    ]
                ], [], 2, 3
            ],

            [
                [
                    "Symbol_2", "Symbol_4", "Symbol_6", "Symbol_2", "Symbol_6", "Symbol_6", "Symbol_6", "Symbol_0", "Symbol_2"
                ],
                [7, 5, 3],
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_6",
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
                4
            ],

            [
                [
                    "Symbol_2", "Symbol_6", "Symbol_2", "Symbol_5", "Symbol_5", "Symbol_5", "Symbol_5", "Symbol_4", "Symbol_2"
                ],
                [4, 5, 6],
                [
                    [
                        "index" => 1,
                        "name" => "Symbol_5",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 5,
                        "multiply" => 0,
                        "win_amount" => 1,
                        "active_icon" => [
                            4,
                            5,
                            6
                        ]
                    ]
                ],
                [],
                0,
                5
            ],
            
        ];
    }
}
