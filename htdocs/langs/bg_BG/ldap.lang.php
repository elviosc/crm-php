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

$ldap = array(
		'CHARSET' => 'UTF-8',
		'DomainPassword' => 'Парола за домейн',
		'YouMustChangePassNextLogon' => 'Парола за потребителски <b>%s</b> за домейна <b>%s</b> трябва да бъдат променени.',
		'UserMustChangePassNextLogon' => 'Потребителят трябва да смени паролата на домейна %s',
		'LdapUacf_NORMAL_ACCOUNT' => 'Потребителски акаунт',
		'LdapUacf_DONT_EXPIRE_PASSWORD' => 'Парола не изтича',
		'LdapUacf_ACCOUNTDISABLE' => 'Акаунтът е забранен в областта %s',
		'LDAPInformationsForThisContact' => 'Информация в LDAP база данни за този контакт',
		'LDAPInformationsForThisUser' => 'Информация в LDAP база данни за този потребител',
		'LDAPInformationsForThisGroup' => 'Информация в LDAP база данни за тази група',
		'LDAPInformationsForThisMember' => 'Информация в LDAP база данни за този потребител',
		'LDAPAttribute' => 'LDAP атрибут',
		'LDAPAttributes' => 'LDAP атрибути',
		'LDAPCard' => 'LDAP карта',
		'LDAPRecordNotFound' => 'Запишете не се срещат в LDAP база данни',
		'LDAPUsers' => 'Потребителите в LDAP база данни',
		'LDAPGroups' => 'Групи в LDAP база данни',
		'LDAPFieldStatus' => 'Статус',
		'LDAPFieldFirstSubscriptionDate' => 'Първа абонамент дата',
		'LDAPFieldFirstSubscriptionAmount' => 'Първа размера',
		'LDAPFieldLastSubscriptionDate' => 'Последно абонамент дата',
		'LDAPFieldLastSubscriptionAmount' => 'Последно размера',
		'SynchronizeDolibarr2Ldap' => 'Синхронизирайте потребител (Dolibarr -> LDAP)',
		'UserSynchronized' => 'Потребителят синхронизирани',
		'GroupSynchronized' => 'Група синхронизирани',
		'MemberSynchronized' => 'Държавите-синхронизирани',
		'ContactSynchronized' => 'Свържи се синхронизират',
		'ForceSynchronize' => 'Force синхронизиране Dolibarr -> LDAP',
		'ErrorFailedToReadLDAP' => 'Неуспех при четенето на LDAP база данни. Проверете LDAP модул за настройка и достъпността на базата данни.'
);
?>