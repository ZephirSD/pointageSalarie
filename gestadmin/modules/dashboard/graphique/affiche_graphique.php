<?php
include('C:/xampp2/htdocs/ClimTechStock/gestadmin/modules/dashboard/graphique/requete_graphique.php');
?>
<script>
    const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) : ?> 
                    <?php
                        $dateTraitement = $row['Date_traitement'];
                        $dateRectif = strtotime($dateTraitement); 
                        $newDate = date("d/m/Y", $dateRectif);

                    ?>
                '<?php echo htmlspecialchars($newDate) ?>',
                <?php endwhile; ?>
            ],
            datasets: [{
                data: [
                    <?php while ($row2 = $stmt->fetch(PDO::FETCH_ASSOC)) : ?> '<?php echo htmlspecialchars($row2['Total_Montant_Jour']) ?>',
                    <?php endwhile; ?>
                ],
                backgroundColor: [
                    'rgb(91, 158, 195)',
                    'rgb(91, 158, 195)',
                    'rgb(91, 158, 195)',
                    'rgb(91, 158, 195)',
                    'rgb(91, 158, 195)',
                ],
                borderColor: [
                    'rgb(91, 158, 195)',
                    'rgb(91, 158, 195)',
                    'rgb(91, 158, 195)',
                    'rgb(91, 158, 195)',
                    'rgb(91, 158, 195)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: 'white',
                        font: {
                            size: 17
                        }
                    },
                    grid: {
                        color: '#5B5B5B'
                    },
                },
                x: {
                    beginAtZero: true,
                    ticks: {
                        color: 'white',
                        font: {
                            size: 17
                        }
                    },
                    grid: {
                        color: '#5B5B5B'
                    },
                },
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Chiffres d\'affaires hebdomadaires (en €)',
                    font: {
                        size: 36,
                        family: 'Montserrat, sans-serif'
                    },
                    color: 'white'
                },
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        labelTextColor: function(context) {
                            return 'white';
                        }
                    }
                }

            }
        }
    });
</script>