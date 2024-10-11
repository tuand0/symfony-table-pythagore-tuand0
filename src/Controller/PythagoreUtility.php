<?php

namespace App;

class PythagoreUtility
{
    public function display(): string
    {
        $html = '<table><thead>';
        $html .= '<tr>';
        for ($i = 0; $i <= 10; $i++) {
            $html .= '<th></th>';
        }
        $html .= '</tr>';
        $html .= '</thead><tbody>';
        $html .= '<tr>';
        for ($i = 0; $i <= 10; $i++) {
            $html .= '<td>' .$i. '</td>';
        }
        $html .= '</tr>';
        for ($i = 1; $i <= 10; $i++) {
            $html .= '<tr' . ($i % 2 !== 0 ? ' class="table-ligne-impaire"' : '') . '>';
            $html .= '<td>' . $i . '</td>';
            for ($j = 1; $j <= 10; $j++) {
                if ($i === $j) {
                    $html .= '<td>X</td>';
                } else {
                    $html .= '<td>' . ($i * $j) . '</td>';
                }
            }
            $html .= '</tr>';
        }
        $html .= '</tbody></table>';

        return $html;
    }
}