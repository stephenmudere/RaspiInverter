<?php
/**
 * Created by PhpStorm.
 * User: pablo
 * Date: 14/03/19
 * Time: 22:46
 */

namespace RaspiInverter\Data;


class CurrentValues extends AbstractDataCollector
{
    const SIZE = 112;
    const COMMAND = "QPIGS\xb7\xa9\r";
    const COUNT = 19;

    /**
     * @return string
     */
    protected function getCommand()
    {
        return self::COMMAND;
    }

    /**
     * @return int
     */
    protected function getSize()
    {
        return self::SIZE;
    }

    /**
     * @return int
     */
    protected function getCountData()
    {
        return self::COUNT;
    }

    /**
     * @return array
     */
    protected function getCalculatedData()
    {
        $result['grid_voltage'] = $this->result[0];
        $result['grid_frecuency'] = $this->result[1];
        $result['ac_output_voltage'] = $this->result[2];
        $result['ac_output_frecuency'] = $this->result[3];
        $result['ac_output_power_va'] = $this->result[4];
        $result['ac_output_active_power'] = $this->result[5];
        $result['output_load_percent'] = $this->result[6];
        $result['bus_voltage'] = $this->result[7];
        $result['battery_voltage'] = $this->result[8];
        $result['battery_charging_current'] = $this->result[9];
        $result['battery_capacity'] = $this->result[10];
        $result['temperature'] = $this->result[11];
        $result['pv_input_current_for_battery'] = $this->result[12];
        $result['pv_input_voltage'] = $this->result[13];
        $result['battery_voltage_from_scc'] = $this->result[14];
        $result['battery_discharge_current'] = $this->result[15];
        $result['device_status'] = $this->result[16];
        $result['mask_b'] = $this->result[17];
        $result['mask_c'] = $this->result[18];
        $result['pv_active_power'] = $this->result[19];

        return $result;
    }
}