<?php
        $tabela = array (
        array("Disciplina" => "Matematica" => "5" => "8.5"), 
        array("Disciplina" =>"Português" => "Faltas" => "2" => "Media" => "9"),
        array("Disciplina" =>"Geografia" => "Faltas" => "10" => "Media" => "6"),
        array("Disciplina" =>"Ed. Fisica" => "Faltas" => "2"=> "Media" => "8"),
        );
        
        echo "<table>
                <tr>
                    <td>Disciplina</th>
                    <td>Faltas</th>
                    <td>Média</th>
                </tr>";
        
        foreach ($tabela as $disciplina) {
            echo "<tr>";
            foreach($disciplina as $chave => $valor) {
                echo "<td>$valo</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
?>
