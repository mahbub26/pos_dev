<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
* Script: pos_lang.php
*   Italian translation file
*
 * Last edited:
 * 30th April 2015
 *
 * Package:
 * Stock Manage Advance v3.0
 * 
 * You can translate this file to your language. 
 * For instruction on new language setup, please visit the documentations. 
 * You also can share your language files by emailing to saleem@tecdiary.com 
 * Thank you 
 */

// For quick cash buttons -  if you need to format the currency please do it according to you system settings
$lang['quick_cash_notes']               = array('10', '20', '50', '100', '500', '1000', '5000');

$lang['pos_module']                     = "Modulo POS";
$lang['cat_limit']                      = "Mostra Categorie";
$lang['pro_limit']                      = "Mostra Prodotti";
$lang['default_category']               = "Categoria Default";
$lang['default_customer']               = "Cliente Default";
$lang['default_biller']                 = "Addetto Fatturazione Default";
$lang['pos_settings']                   = "Impostazioni POS";
$lang['barcode_scanner']                = "Scanner Barcode";
$lang['x']                              = "X";
$lang['qty']                            = "Qtà";
$lang['total_items']                    = "Oggetti Totali";
$lang['total_payable']                  = "Totale Pagabile";
$lang['total_sales']                    = "Totale Vendite";
$lang['tax1']                           = "Tassa 1";
$lang['total_x_tax']                    = "Totale";
$lang['cancel']                         = "Cancella";
$lang['payment']                        = "Pagamento";
$lang['pos']                            = "POS";
$lang['p_o_s']                          = "Punto di Vendita";
$lang['today_sale']                     = "Vendite Oggi";
$lang['daily_sales']                    = "Vendite Giornaliere";
$lang['monthly_sales']                  = "Vendite Mensili";
$lang['pos_settings']                   = "ImpostazioniPOS";
$lang['loading']                        = "Caricamento...";
$lang['display_time']                   = "Tempo Display";
$lang['pos_setting_updated']            = "Impostazioni POS correttamente aggiornate";
$lang['pos_setting_updated_payment_failed'] = "Impostazioni POS correttamente salvate ma il gateway pagamenti ha riportato un errore. Prova nuovamente";
$lang['tax_request_failed']             = "Richiesta Fallita, C'è qualche problema con l'aliquota fiscale!";
$lang['pos_error']                      = "Errore nel calcolo. Aggiungi nuovamente i prodotti. Grazie!";
$lang['qty_limit']                      = "Hai raggiunto la quantità limite di 999.";
$lang['max_pro_reached']                = "Numero Massimo Raggiunto! Aggiungi un pagamento per questo e apri un nuovo conto per tutti gli altri oggetti. Grazie!";
$lang['code_error']                     = "Richiesta Fallita, Controlla il tuo codice e prova nuovamente!";
$lang['x_total']                        = "Aggiungi un prodotto prima del pagamento. Grazie!";
$lang['paid_l_t_payable']               = "La cifra pagata è inferiore alla cifra da pagare. Clicca OK per inviare la vendita.";
$lang['suspended_sales']                = "Vendite Sospese";
$lang['sale_suspended']                 = "Vendita correttamente sospesa.";
$lang['sale_suspend_failed']            = "Sospensione vendite fallita. Prova nuovamente!";
$lang['add_to_pos']                     = "Aggiungi questa vendita allo schermo pos";
$lang['delete_suspended_sale']          = "Elimina questa vendita sospesa";
$lang['save']                           = "Salva";
$lang['discount_request_failed']        = "Richiesta fallita, Ci sono alcuni problemi con lo sconto!";
$lang['saving']                         = "Salvo...";
$lang['paid_by']                        = "Pagato da";
$lang['paid']                           = "Pagato";
$lang['ajax_error']                     = "Richiesta fallita, Prova nuovamente!";
$lang['close']                          = "Chiudi";
$lang['finalize_sale']                  = "Finalizza Vendita";
$lang['cash_sale']                      = "Pagamento in Contanti";
$lang['cc_sale']                        = "pagamento con carta di Credito";
$lang['ch_sale']                        = "Pagamento in Assegno";
$lang['sure_to_suspend_sale']           = "Sicuro di voler sospendere la Vendita?";
$lang['leave_alert']                    = "Perderai i dati di vendita. Clicca OK per lasciare e Cancella per restare in questa pagina.";
$lang['sure_to_cancel_sale']            = "Sicuro di voler eliminare la Vendita?";
$lang['sure_to_submit_sale']            = "Sicuro di voler inviare la Vendita?";
$lang['alert_x_sale']                   = "Sicuro di voler eliminare questa Vendita Sospesa?";
$lang['suspended_sale_deleted']         = "Vendita sospesa correttamente eliminata";
$lang['item_count_error']               = "Errore durante la conta di oggetti totali. Prova nuovamente!";
$lang['x_suspend']                      = "Aggiungi un prodotto prima di sospendere la vendita. Grazie!";
$lang['x_cancel']                       = "Non ci sono prodotti. Grazie!";
$lang['yes']                            = "Si";
$lang['no1']                            = "No";
$lang['suspend']                        = "Sospendi";
$lang['order_list']                     = "Altra Lista";
$lang['print']                          = "Stampa";
$lang['cf_display_on_bill']             = "Campo Custom da mostrare sulla ricevuta pos";
$lang['cf_title1']                      = "Titolo Campo Custom 1";
$lang['cf_value1']                      = "Valore Campo Custom 1";
$lang['cf_title2']                      = "Titolo Campo Custom 2";
$lang['cf_value2']                      = "Valore Campo Custom 2";
$lang['cash']                           = "Contanti";
$lang['cc']                             = "Carta di Credito";
$lang['cheque']                         = "Assegno";
$lang['cc_no']                          = "N° Carta di Credito";
$lang['cc_holder']                      = "Nome titolare";
$lang['cheque_no']                      = "N° Assegno";
$lang['email_sent']                     = "Email inviata correttamente!";
$lang['email_failed']                   = "Funzione invio email fallita!";
$lang['back_to_pos']                    = "Indietro al POS";
$lang['shortcuts']                      = "Shortcuts";
$lang['shortcut_key']                   = "Shortcut Key";
$lang['shortcut_keys']                  = "Shortcut Keys";
$lang['keyboard']                       = "Tastiera";
$lang['onscreen_keyboard']              = "On-Screen Keyboard";
$lang['focus_add_item']                 = "Focus Aggiungi Oggetto Input";
$lang['add_manual_product']             = "Aggiungi Oggetto Manualmente alla vendita";
$lang['customer_selection']             = "Input Cliente";
$lang['toggle_category_slider']         = "Toggle Slider Categorie";
$lang['toggle_subcategory_slider']      = "Toggle Slider Sottocategorie";
$lang['cancel_sale']                    = "Cancella Vendita";
$lang['suspend_sale']                   = "Sospendi Vendita";
$lang['print_items_list']               = "Stmpa lista oggetti";
$lang['finalize_sale']                  = "Finalizza Vendita";
$lang['open_hold_bills']                = "Apri Vendite Sospese";
$lang['search_product_by_name_code']    = " Scansiona/Cerca prodotto da nome/codice";
$lang['receipt_printer']                = "RIcevuta stampante";
$lang['cash_drawer_codes']              = "Codice per Aprire Cash Drawer";
$lang['pos_list_printers']              = "Lista Stampanti POS (Separate da |)";
$lang['custom_fileds']                  = "Campi Custom per ricevuta";
$lang['shortcut_heading']               = "Ctrl, Shift e Alt con un'altra lettera (Ctrl+Shift+A). Le funzioni chiave (F1 - F12) sono supportate.";
$lang['product_button_color']           = "Colore Bottone Prodotto";
$lang['edit_order_tax']                 = "Modifica Tassa Ordine";
$lang['select_order_tax']               = "Seleziona Tassa Ordine";
$lang['paying_by']                      = "Pagamento con";
$lang['paypal_pro']                     = "Paypal Pro";
$lang['stripe']                         = "Stripe";
$lang['swipe']                          = "Swipe";
$lang['card_type']                      = "Tipo Carta";
$lang['Visa']                           = "Visa";
$lang['MasterCard']                     = "MasterCard";
$lang['Amex']                           = "Amex";
$lang['Discover']                       = "Discover";
$lang['month']                          = "Mese";
$lang['year']                           = "Anno";
$lang['cvv2']                           = "Codice Sicurezza";
$lang['total_paying']                   = "Totale Pagamento";
$lang['balance']                        = "Saldo";
$lang['serial_no']                      = "N° Seriale";
$lang['product_discount']               = "Sconto Prodotto";
$lang['max_reached']                    = "Numero massimo raggiunto.";
$lang['add_more_payments']              = "Aggiungi Più Pagamenti";
$lang['sell_gift_card']                 = "Vendi Gift Card";
$lang['gift_card']                      = "Gift Card";
$lang['product_option']                 = "Opzioni Prodotto";
$lang['card_no']                        = "N° Carta";
$lang['value']                          = "Valore";
$lang['paypal']                         = "Paypal";
$lang['sale_added']                     = "Vendita POS correttamente aggiunta";
$lang['invoice']                        = "Fattura";
$lang['vat']                            = "IVA";
$lang['web_print']                      = "Stampa da Web";
$lang['ajax_request_failed']            = "Richiesta Ajax fallita, prova nuovamente";
$lang['pos_config']                     = "Configurazione POS";
$lang['default']                        = "Default";
$lang['primary']                        = "Primario";
$lang['info']                           = "Info";
$lang['warning']                        = "Attenzione";
$lang['danger']                         = "Pericolo";
$lang['enable_java_applet']             = "Abilita Java Applet";
$lang['update_settings']                = "Aggiorna Impostazioni";
$lang['open_register']                  = "Apri Registro";
$lang['close_register']                 = "Chiudi Registro";
$lang['cash_in_hand']                   = "Contanti in mano";
$lang['total_cash']                     = "Totale Contanti";
$lang['total_cheques']                  = "Totale Assegni";
$lang['total_cc_slips']                 = "Totale Carte di Credito";
$lang['CC']                             = "Carta di Credito";
$lang['register_closed']                = "Registro chiuso correttamente";
$lang['register_not_open']              = "Registro non aperto, Inserisci il totale di contanti in mano e clicca su apri registro";
$lang['welcome_to_pos']                 = "benvenuto in POS";
$lang['tooltips']                       = "Suggerimenti";
$lang['previous']                       = "Precedente";
$lang['next']                           = "Successivo";
$lang['payment_gateways']               = "Gateways Pagamento";
$lang['stripe_secret_key']              = "Striscia Chiave Segreta";
$lang['stripe_publishable_key']         = "Striscia Chiave pubblica";
$lang['APIUsername']                    = "Paypal Pro API Username";
$lang['APIPassword']                    = "Paypal Pro API Password";
$lang['APISignature']                   = "Paypal Pro API Signature";
$lang['view_bill']                      = "Vedi Conto";
$lang['view_bill_screen']               = "Vedi Schermata Conto";
$lang['opened_bills']                   = "Conti Aperti";
$lang['leave_opened']                   = "Lascia Aperti";
$lang['delete_bill']                    = "Elimina Conto";
$lang['delete_all']                     = "Elimina Tutti";
$lang['transfer_opened_bills']          = "Trasferimento Conti Aperti";
$lang['paypal_empty_error']             = "Transazione Paypal fallita (Array vuoto)";
$lang['payment_failed']                 = "<strong>Pagamento Fallito!</strong>";
$lang['pending_amount']                 = "Importo in Sospeso";
$lang['available_amount']               = "Importo Disponibile";
$lang['stripe_balance']                 = "Riga Saldo";
$lang['paypal_balance']                 = "Paypal Saldo";
$lang['view_receipt']                   = "Vedi Ricevuta";
$lang['rounding']                       = "Arrotondamento";
$lang['ppp']                            = "Paypal Pro";
$lang['delete_sale']                    = "Elimina Vendita";
$lang['return_sale']                    = "Vendita di Ritorno";
$lang['edit_sale']                      = "Modifica Vendita";
$lang['email_sale']                     = "Email Vendita";
$lang['add_delivery']                   = "Aggiungi Consegna";
$lang['add_payment']                    = "Aggiungi Pagamento";
$lang['view_payments']                  = "Vedi Pagamento";
$lang['no_meil_provided']               = "Nessun indirizzo email fornito";
$lang['payment_added']                  = "Pagamento aggiunto correttamente";
$lang['suspend_sale']                   = "Sospendi Vendita";
$lang['reference_note']                 = "Note Riferimento";
$lang['type_reference_note']            = "Inserisci la nota riferimento e invia per sospendere questa vendita";
$lang['change']                         = "Cambia";
$lang['quick_cash']                     = "Quick Cash";
$lang['sales_person']                   = "Associato Vendite";
$lang['no_opeded_bill']                 = "Nessun conto trovato";
$lang['please_update_settings']         = "Aggiorna le impostazioni prima di usare il POS";
$lang['order']                          = "Ordine";
$lang['bill']                           = "Conto";
$lang['due']                            = "Dovuto";
$lang['paid_amount']                    = "Importo Pagato";
$lang['due_amount']                     = "Importo Dovuto";
$lang['edit_order_discount']            = "Modifica Sconto Ordine";
$lang['sale_note']                      = "Nota Venditae";
$lang['staff_note']                     = "Nota Staff";
$lang['list_open_registers']            = "Lista Registri Aperti";
$lang['open_registers']                 = "Apri Registro";
$lang['opened_at']                      = "Aperto alle";
$lang['all_registers_are_closed']       = "Tutti i registri sono chiusi";
$lang['review_opened_registers']        = "Rivedere tutti i registri aperti in tabella";
$lang['suspended_sale_loaded']          = "Vendita sospesa correttamente caricata";
$lang['incorrect_gift_card']            = "Il numero della Gift card non è corretto o scaduto.";
$lang['gift_card_not_for_customer']     = "Il numero della Gift card non è per clienti.";
$lang['delete_sales']                   = "Elimina Vendite";
$lang['click_to_add']                   = "Clicca il bottone di seguito per aprire";
$lang['tax_summary']                    = "Sommario Tassa";
$lang['qty']                            = "Qtà";
$lang['tax_excl']                       = "Tassa Escl";
$lang['tax_amt']                        = "Tassa Amm";
$lang['total_tax_amount']               = "Importo Totale Tassa";
$lang['tax_invoice']                    = "FATTURA FISCALE";
$lang['char_per_line']                  = "Caratteri per riga";
$lang['delete_code']                    = "POS Pin Code";
$lang['quantity_out_of_stock_for_%s']   = "La quantità non è in magazzino per %s";
$lang['refunds']                        = "Rimborsi";
$lang['register_details']               = "Registra Dettagli";
$lang['payment_note']                   = "Note Pagamento";
$lang['to_nearest_005']                 = "Vicino a 0.05";
$lang['to_nearest_050']                 = "Vicino a 0.50";
$lang['to_nearest_number']              = "Vicno al numero (intero)";
$lang['to_next_number']                 = "Prossimo numero (intero)";
$lang['update_heading']                 = "Questa pagina ti aiuterà a controllare e installare gli aggiornamenti facilmente con un solo clic. <strong> Se ci sono più di 1 aggiornamenti disponibili , si prega di aggiornare uno per uno partendo dall'alto (versione bassa) </strong>.";
$lang['update_successful']              = "Oggetto aggiornato correttamente";
$lang['using_latest_update']            = "Stai usando l'ultima versione.";
$lang['sale_details_modal']             = "Modale Dettagli Vendite";
$lang['bill_x_found']                   = "Sospeso disegno di legge non ha trovato , si prega di controllare l'elenco di vendita sospesa per aprire qualsiasi progetto di legge sospeso";
$lang['after_sale_page']                = "Pagina Dopo Vendita";
$lang['receipt']                        = "Ricevuta";
$lang['default']                        = "Ricevuta";
$lang['item_order']                     = "Oggetto Ordine";
$lang['default']                        = "Default";
$lang['api_login_id']                   = "API Login ID";
$lang['api_transaction_key']            = "API Transaction Key";
$lang['toggle_brands_slider']           = "Toggle Slider Marchi";
