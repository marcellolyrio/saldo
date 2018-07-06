<?php
    /*----- grupo de rotas com autenticação ------ */
$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    
    /*----- rota area de Historico das movimentacoes ------ */
    $this->any('historic-search', 'BalanceController@searchHistoric')->name('historic.search');
    $this->get('historic', 'BalanceController@historics')->name('admin.historic');

    /*----- rota area de Tranferencia na conta ------ */
    $this->post('transfer', 'BalanceController@transferStore')->name('transfer.store');
    $this->post('confirm-transfer', 'BalanceController@confirmTransfer')->name('confirm.transfer');
    $this->get('transfer', 'BalanceController@transfer')->name('balance.transfer');
    
    /*----- rota area de Saque na conta ------ */
    $this->post('withdraw', 'BalanceController@withdrawStore')->name('withdraw.store');
    $this->get('withdraw', 'BalanceController@withdraw')->name('balance.withdraw');
    
    /*----- rota area de Deposito na conta ------ */
    $this->post('deposit', 'BalanceController@depositStore')->name('deposit.store');
    $this->get('deposit', 'BalanceController@deposit')->name('balance.deposit');
    
    /*----- rota index pagina Saldo ------ */
    $this->get('balance', 'BalanceController@index')->name('admin.balance');
    
    /*----- rota index area Admin ------ */
    $this->get('/', 'AdminController@index')->name('admin.home');
});

$this->post('atualizar-perfil', 'Admin\UserController@profileUpdate')->name('profile.update')->middleware('auth');
$this->get('meu-perfil', 'Admin\UserController@profile')->name('profile')->middleware('auth');

$this->get('/', 'Site\SiteController@index')->name('home');


Auth::routes();


