<?php
/* Copyright (C) 2012	Regis Houssin	<regis@dolibarr.fr>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$boxes = array(
		'CHARSET' => 'UTF-8',
		'BoxLastRssInfos' => 'Rss informacija',
		'BoxLastProducts' => 'Zadnji proizvodi/storitve',
		'BoxProductsAlertStock' => 'Products in stock alert',
		'BoxLastProductsInContract' => 'Zadnji pogodbeni proizvodi/storitve',
		'BoxLastSupplierBills' => 'Zadnji računi dobavitelja',
		'BoxLastCustomerBills' => 'Zadnji računi za kupca',
		'BoxOldestUnpaidCustomerBills' => 'Zadnji neplačani računi kupca',
		'BoxOldestUnpaidSupplierBills' => 'Zadnji neplačani računi dobavitelju',
		'BoxLastProposals' => 'Zadnje komercialne ponudbe',
		'BoxLastProspects' => 'Zadnje možne stranke',
		'BoxLastCustomers' => 'Zadnji kupci',
		'BoxLastSuppliers' => 'Zadnji dobavitelji',
		'BoxLastCustomerOrders' => 'Zadnja naročila kupcev',
		'BoxLastBooks' => 'Zadnje vknjižbe',
		'BoxLastActions' => 'Zadnje aktivnosti',
		'BoxLastContracts' => 'Zadnja naročila',
		'BoxLastContacts' => 'Zadnji kontakti/naslovi',
		'BoxLastMembers' => 'Zadnji člani',
		'BoxCurrentAccounts' => 'Trenutno stanje računov',
		'BoxSalesTurnover' => 'Prihodek od prodaje',
		'BoxTotalUnpaidCustomerBills' => 'Skupaj neplačani računi kupca',
		'BoxTotalUnpaidSuppliersBills' => 'Skupaj neplačani računi dobavitelju',
		'BoxTitleLastBooks' => 'Zadnjih %s vnesenih vknjižb',
		'BoxTitleNbOfCustomers' => 'Število kupcev',
		'BoxTitleLastRssInfos' => 'Zadnjih %s novic od %s',
		'BoxTitleLastProducts' => 'Zadnjih %s spremenjenih proizvodov/storitev',
		'BoxTitleProductsAlertStock' => 'Products in stock alert',
		'BoxTitleLastCustomerOrders' => 'Zadnjih %s spremenjenih naročil kupcev',
		'BoxTitleLastSuppliers' => 'Zadnjih %s vnesenih dobaviteljev',
		'BoxTitleLastCustomers' => 'Zadnjih %s vnesenih kupcev',
		'BoxTitleLastModifiedSuppliers' => 'Zadnjih %s spremenjenih dobaviteljev',
		'BoxTitleLastModifiedCustomers' => 'Zadnjih %s spremenjenih kupcev',
		'BoxTitleLastCustomersOrProspects' => 'Zadnjih %s spremenjenih kupcev ali možnih strank',
		'BoxTitleLastPropals' => 'Zadnjih %s vnesenih ponudb',
		'BoxTitleLastCustomerBills' => 'Zadnjih %s računov kupcev',
		'BoxTitleLastSupplierBills' => 'Zadnjih %s računov dobaviteljev',
		'BoxTitleLastProspects' => 'Zadnjih %s vnesenih možnih strank',
		'BoxTitleLastModifiedProspects' => 'Zadnjih %s spremenjenih možnih kupcev',
		'BoxTitleLastProductsInContract' => 'Zadnjih %s proizvodov/storitev v pogodbi',
		'BoxTitleLastModifiedMembers' => 'Zadnjih %s spremenjenih članov',
		'BoxTitleOldestUnpaidCustomerBills' => 'Najstarejših %s neplačanih računov kupcev',
		'BoxTitleOldestUnpaidSupplierBills' => 'Najstarejših %s neplačanih računov dobaviteljev',
		'BoxTitleCurrentAccounts' => 'Trenutna stanja računov',
		'BoxTitleSalesTurnover' => 'Prihodek od prodaje',
		'BoxTitleTotalUnpaidCustomerBills' => 'Neplačani računi kupca',
		'BoxTitleTotalUnpaidSuppliersBills' => 'Neplačani računi dobavitelju',
		'BoxTitleLastModifiedContacts' => 'Zadnjih %s spremenjenih kontaktov/naslovov',
		'BoxMyLastBookmarks' => 'Moji zadnji zaznamki',
		'BoxOldestExpiredServices' => 'Najstarejši dejavni potekla storitve',
		'BoxLastExpiredServices' => 'Zadnje %s najstarejši stiki z aktivnimi potekel storitev',
		'BoxTitleLastActionsToDo' => 'Zadnjih %s planiranih aktivnosti',
		'BoxTitleLastContracts' => 'Zadnjih %s pogodb',
		'BoxTitleLastModifiedDonations' => 'Zadnjih %s spremenjenih donacij',
		'BoxTitleLastModifiedExpenses' => 'Zadnjih %s spremenjenih stroškov',
		'BoxGlobalActivity' => 'Global activity (invoices, proposals, orders)',
		'FailedToRefreshDataInfoNotUpToDate' => 'Neuspešna osvežitev RSS fluxa. Datum zadnje uspešne osvežitve: %s',
		'LastRefreshDate' => 'Datum zadnje osvežitve',
		'NoRecordedBookmarks' => 'Ni definiranih zaznamkov.',
		'ClickToAdd' => 'Kliknite tukaj za dodajanje.',
		'NoRecordedCustomers' => 'Ni vnesenih kupcev',
		'NoRecordedContacts' => 'Ni vnesenih kontaktov',
		'NoActionsToDo' => 'Ni planiranih aktivnosti',
		'NoRecordedOrders' => 'Ni vnesenih naročil kupca',
		'NoRecordedProposals' => 'Ni vnesenih ponudb',
		'NoRecordedInvoices' => 'Ni vnesenih računov kupca',
		'NoUnpaidCustomerBills' => 'Ni neplačanih računov kupca',
		'NoRecordedSupplierInvoices' => 'Ni vnesenih računov dobavitelja',
		'NoUnpaidSupplierBills' => 'Ni neplačanih računov dobavitelja',
		'NoModifiedSupplierBills' => 'Ni spremenjenih računov dobavitelja',
		'NoRecordedProducts' => 'Ni vnesenih proizvodov/storitev',
		'NoRecordedProspects' => 'Ni vnesenih ponudb',
		'NoContractedProducts' => 'Ni pogodbenih proizvodov/storitev',
		'NoRecordedContracts' => 'Ni vnesenih pogodb',
		// Latest supplier orders
		'BoxLatestSupplierOrders' => 'Latest supplier orders',
		'BoxTitleLatestSupplierOrders' => '%s latest supplier orders',
		'NoSupplierOrder' => 'No recorded supplier order'
);
?>