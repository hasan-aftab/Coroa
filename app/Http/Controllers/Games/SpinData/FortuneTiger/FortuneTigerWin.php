<?php

namespace App\Http\Controllers\Games\SpinData\FortuneTiger;

class FortuneTigerWin
{
    /**
     * @return array
     */
    public static function getWin(): array
    {
        return [
            [
                [
                    "Symbol_1", "Symbol_0", "Symbol_5", "Symbol_6",  "Symbol_0", "Symbol_6", "Symbol_1", "Symbol_0", "Symbol_6"
                ],
                [4, 5, 6],  // WL01 -- 1:3
                [
                    [
                        "index" => 1,
                        "name" => "Symbol_6",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 3,
                        "multiply" => 0,
                        "win_amount" => 0.6,
                        "active_icon" => [
                            4,
                            5,
                            6
                        ]
                    ]
                ], [], 0, 3
            ],

            [
                [
                    "Symbol_6", "Symbol_0", "Symbol_5", "Symbol_1",  "Symbol_0", "Symbol_6", "Symbol_1", "Symbol_0", "Symbol_6"
                ],
                [1, 5, 9],  // WL04 -- 1:3
                [
                    [
                        "index" => 4,
                        "name" => "Symbol_6",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 3,
                        "multiply" => 0,
                        "win_amount" => 0.6,
                        "active_icon" => [
                            1,
                            5,
                            9
                        ]
                    ]
                ], [], 0, 3
            ],

            [
                [
                    "Symbol_1", "Symbol_0", "Symbol_6", "Symbol_1",  "Symbol_0", "Symbol_6", "Symbol_6", "Symbol_0", "Symbol_5"
                ],
                [3, 5, 7],  // WL05 -- 1:3
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_6",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 3,
                        "multiply" => 0,
                        "win_amount" => 0.6,
                        "active_icon" => [
                            3,
                            5,
                            7
                        ]
                    ]
                ], [], 0, 3
            ],

            [
                [
                    "Symbol_2", "Symbol_4", "Symbol_6", "Symbol_6", "Symbol_6", "Symbol_6", "Symbol_2", "Symbol_0", "Symbol_2"
                ],
                [4, 5, 6],  // WL01 -- 1:4
                [
                    [
                        "index" => 1,
                        "name" => "Symbol_6",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 4,
                        "multiply" => 0,
                        "win_amount" => 0.8,
                        "active_icon" => [
                            4,
                            5,
                            6
                        ]
                    ]
                ],
                [],
                0, 4
            ],

            [
                [
                    "Symbol_6", "Symbol_4", "Symbol_2", "Symbol_2", "Symbol_6", "Symbol_6", "Symbol_2", "Symbol_0", "Symbol_6"
                ],
                [1, 5, 9],  // WL04 -- 1:4
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
                ],
                [],
                0, 4
            ],

            [
                [
                    "Symbol_2", "Symbol_4", "Symbol_6", "Symbol_2", "Symbol_6", "Symbol_6", "Symbol_6", "Symbol_0", "Symbol_2"
                ],
                [7, 5, 3],  // WL05 -- 1:4
                [
                    [
                        "index" => 5,
                        "name" => "Symbol_6",
                        "combine" => 3,
                        "way_243" => 1,
                        "payout" => 4,
                        "multiply" => 0,
                        "win_amount" => 0.8,
                        "active_icon" => [
                            7,
                            5,
                            3
                        ]
                    ]
                ],
                [],
                0, 4
            ],

        ];
    }
}
