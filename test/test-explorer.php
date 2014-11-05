<?php

require_once('../lib/Blockchain.php');

$api_code = null;
if(file_exists('code.txt')) {
	$api_code = trim(file_get_contents('code.txt'));
}

$Blockchain = new Blockchain($api_code);

// List all blocks at a certain height
print_r($Blockchain->Explorer->getBlocksAtHeight(1));

// Get block by index
// $block = $Blockchain->Explorer->getBlockByIndex(100000);
// print_r($block);

// Get previous block by hash
// $hash = $block->previous_block;
// print_r($Blockchain->Explorer->getBlock($hash));

// First mining reward transaction
// print_r($Blockchain->Explorer->getTransaction('0e3e2357e806b6cdb1f70b54c3a3a17b6714ee1f0e68bebb44a74b1efd512098'));

// Get the transaction from block 1, by index
// print_r($Blockchain->Explorer->getTransactionByIndex(14854));

// Get details of a single address
// print_r($Blockchain->Explorer->getAddress('1AqC4PhwYf7QAyGBhThcyQCKHJyyyLyAwc'));

// Get unspent outputs for addresses
// print_r($Blockchain->Explorer->getUnspentOutputs(array('1AqC4PhwYf7QAyGBhThcyQCKHJyyyLyAwc', '1PfcDu4n11Dv7rNexM1AxrNWqkEgwCvYWD')));

// Get the latest block
// print_r($Blockchain->Explorer->getLatestBlock());

// Get blocks from the past
// print_r($Blockchain->Explorer->getBlocksForDay(1262325600));

// Get blocks from a mining pool
// print_r($Blockchain->Explorer->getBlocksByPool('Eligius'));

// Get unconfirmed transactions
// $tx = $Blockchain->Explorer->getUnconfirmedTransactions();
// print_r($tx);

// Get inventory data for an unconfirmed transaction in $tx
// if(count($tx) > 0)
//	print_r($Blockchain->Explorer->getInventoryData($tx[0]->hash));



// Output log of activity
print_r($Blockchain->log);

