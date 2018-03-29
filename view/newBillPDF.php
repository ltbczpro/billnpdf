<page>
    <!--<page_footer style="text-align: center; color:grey; line-height: none; font-size: 10px;">
    </page_footer>-->
    <table style="width:100%;" cellspacing="0" cellpadding="0">
        <tr>ss
            <td style="text-align: right; line-height: none; width: 80%" ><h2>FACTURE</h2>
                <h3>N°FAC-<?php echo $_POST['number'];?></h3>
                <h4><?php echo date('d/m/Y'); ?></h4>
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: right; line-height: none; width: 80%">
                <p><b><?php echo $_POST['type'];?></b></p>
                <p>Montant à payer:<b><?php echo number_format($aiat, 2, ',', ' '); ?> €</b></p>
            </td>
        </tr>
        <tr>
            <td style="line-height: none;"><h2><?php echo $_POST['name'];?></h2>
                <p><?php echo $_POST['adress'];?></p>
                <p style="font-size:10px;">Email: <?php echo $_POST['email'];?></p>
                <p style="font-size: 10px;">Tel: <?php echo $_POST['phone'];?></p>
            </td>
        </tr>
        <br>
        <tr>
            <td style="line-height: none;">
                <p style="text-decoration: underline;"><big>Adresse de facturation</big></p>
                <p><b><?php echo $_POST['clientName'];?></b></p>
                <p><?php echo $_POST['clientAdress'];?></p>
                <p>Référence:<?php echo $_POST['reference'];?></p>
            </td>
        </tr>
    </table>
        <br>
        <br>
    <table style="width: 100%; margin: auto;">
        <tr style="background-color: lightgrey;">
            <th style="border-collapse:collapse;"><b><big>Désignation</big></b></th>
            <th style="text-align: center;border-collapse:collapse;"><b><big>TVA</big></b></th>
            <th style="text-align: center;border-collapse:collapse;"><b><big>Qté.</big></b></th>
            <th style="text-align: center;border-collapse:collapse;"><b><big>Prix Unit. HT</big></b></th>
            <th style="text-align: right;border-collapse:collapse;"><b><big>Montant HT</big></b></th>
        </tr>
        <tr>
            <td><?php echo $_POST['designation'];?></td>
            <td style="text-align: center;"><?php echo $_POST['tva'];?> %</td>
            <td style="text-align: center;"><?php echo $_POST['quantity'];?></td>
            <td style="text-align: center;"><?php echo number_format($upet, 2, ',', ' ');?>€/mois</td>
            <td style="text-align: right;"><?php echo number_format($twt, 2, ',', ' '); ?> €</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="text-align: center; border-top: 1px solid lightgrey;"><h4>Total HT</h4></td>
            <td colspan="2" style="text-align: right; border-top: 1px solid lightgrey;"><h4><?php echo number_format($twt, 2, ',', ' '); ?>€</h4></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="1" style="text-align: center;">Taux normal<em style="color: grey;">(<?php echo number_format($twt, 2, ',', ' '); ?> € à <?php echo $_POST['tva'];?>%)</em></td>
            <td colspan="3" style="text-align: right"><h4><?php echo number_format($montantTVA, 2, ',', ' '); ?>€</h4></td>
        </tr>
        <tr style="background-color: lightgrey;">
            <td></td>
            <td style="text-align: center;" colspan="1"><p><b><big>Total TTC</big></b></p></td>
            <td colspan="3" style="text-align: right;"><p><b><big><?php echo number_format($aiat, 2, ',', ' '); ?>€</big></b></p></td>
        </tr>
        </table>
        <br>
        <br>
        <br>
    <table>
        <tr>
            <td></td>
            <td>
                <h3>Informations de paiement:</h3>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <p>Prélèvement SEPA de <?php echo number_format($aiat, 2, ',', ' '); ?>€ le <?php echo date("d/m/Y"); ?>.</p>
            </td>
        </tr>
    </table>
</page>