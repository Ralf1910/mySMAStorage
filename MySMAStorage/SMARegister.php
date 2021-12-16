<?php

/**
 * Class SMARegister
 * Constants with sma register and value translations
 *
 * @version     0.1
 * @category    Symcon
 * @package     de.codeking.symcon
 * @author      Frank Herrmann <frank@codeking.de>
 * @link        https://codeking.de
 * @link        https://github.com/CodeKing/de.codeking.symcon
 *
 */
class SMARegister
{
    /**
     * device addresses
     * addresses with fixed values
     */
    const device_addresses = [
        'default' => [
            /**
             * Global
             */
            30051 => [
                'name' => 'Device class',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    460 => 'Solar Inverter',
                    8000 => 'All Devices',
                    8001 => 'Solar Inverter',
                    8002 => 'Wind Turbine Inverter',
                    8007 => 'Battery Inverter',
                    8033 => 'Consumer',
                    8064 => 'Sensor System in General',
                    8065 => 'Electricity meter',
                    8128 => 'Communication device'
                ]
            ],
            30053 => [
                'name' => 'Device-ID',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    9307 => 'Energy Meter',
                    9308 => 'ZoneMonitoring',
                    9309 => 'STP 27kTL-US-10',
                    9310 => 'STP 30kTL-US-10',
                    9311 => 'STP 25kTL-JP-30',
                    9312 => 'SSM30',
                    9313 => 'SB50.0-3SP-40',
                    9314 => 'PlugwiseCircle',
                    9315 => 'PlugwiseSting',
                    9316 => 'SCS-1000',
                    9317 => 'SB 5400TL-JP-22',
                    9326 => 'SunnyBoy Storage 2.5',
                    9346 => 'STP Tripower 6.0'
                ]
            ],
            30057 => [
                'name' => 'Serial',
                'count' => 2,
                'type' => 'U32',
                'format' => 'RAW'
            ],
            30231 => [
                'name' => 'Power limit',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            40187 => [
			    'name' => 'BatCapacRtgWh',
			    'count' => 2,
			    'type' => 'U32',
				'format' => 'RAW',
				'profile' => 'MySMA.Wh'
            ]
        ]
    ];

    /**
     * value addresses
     * addresses with updated values
     */
    const value_addresses = [
        'default' => [
            /**
             * Global
             */
            30201 => [
                'name' => 'Status',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    35 => 'Error',
                    303 => 'Off',
                    307 => 'OK',
                    455 => 'Warning'
                ]
            ],
            30541 => [
                'name' => 'Operating time',
                'count' => 2,
                'type' => 'U32',
                'format' => 'DURATION_S',
                'profile' => 'Hours'
            ],
            30543 => [
                'name' => 'Feed-in time',
                'count' => 2,
                'type' => 'U32',
                'format' => 'DURATION_S',
                'profile' => 'Hours'
            ],
            30535 => [
                'name' => 'Day yield',
                'count' => 2,
                'type' => 'U32',
                'format' => 'RAW',
                'profile' => 'MySMA.Wh',
                'archive' => 1 // archive: counter
            ],
            30529 => [
                'name' => 'Total yield',
                'count' => 2,
                'type' => 'U32',
                'format' => 'RAW',
                'profile' => 'MySMA.Wh',
                'archive' => 1 // archive: counter
            ],


            /**
             * Sunny Boy Storage
             */
            30845 => [
                'name' => 'Current battery charge status',
                'count' => 2,
                'type' => 'U32',
                'format' => 'RAW',
                'profile' => '~Battery.100'
            ],
            30847 => [
			    'name' => 'BatDiagActlCapacNom',
			    'count' => 2,
			    'type' => 'U32',
			    'format' => 'RAW',
			    'profile' => '~Battery.100'
            ],
            30849 => [
                'name' => 'Battery temperature',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX1',
                'profile' => '~Temperature'
            ],
            30851 => [
                'name' => 'Battery voltage',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],
            30955 => [
            	'name' => 'BatOpStt',
            	'count' => 2,
            	'type' => 'U32',
            	'format' => 'ENUM',
				'mapping' => [
				     303 => 'Aus',
				     2291 => 'Batterie Standby',
				     2292 => 'Batterie laden',
				     2293 => 'Batterie entladen',
				     16777213 => 'Informationen liegen nicht vor'
					]
            ],
            31391 => [
			    'name' => 'OperationBatHealth',
			    'count' => 2,
			    'type' => 'U32',
			    'format' => 'ENUM',
				'mapping' => [
					    35 => 'Fehler',
  				        303 => 'Aus',
					    307 => 'OK',
					    455 => 'Warnung',
					    16777213 => 'Informationen liegen nicht vor'
					]
            ]
        ]
    ];

    /**
     * adresses for high frequent values
     */
    const current_addresses = [
        'default' => [
            30775 => [
                'name' => 'AC active power across all phases',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ]
        ]

    ];
}

