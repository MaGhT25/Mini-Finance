<?php

class TransactionTable
{
    private array $transactions;

    public function __construct(array $transactions)
    {
        $this->transactions = $transactions;
    }

    public function render(): string
    {
        $html = '';

        foreach ($this->transactions as $transaction) {
            $id = htmlspecialchars($transaction['id']);
            $type = ucfirst(htmlspecialchars($transaction['type']));
            $description = htmlspecialchars($transaction['description']);
            $amount = htmlspecialchars($transaction['amount']);
            $createdAt = htmlspecialchars($transaction['created_at']);

            $amountFormatted = $transaction['type'] === 'income'
                ? "<span class='text-success'>+$$amount</span>"
                : "<span class='text-danger'>-$$amount</span>";

            $html .= "
                <tr>
                    <td>$id</td>
                    <td>$type</td>
                    <td>$description</td>
                    <td>$amountFormatted</td>
                    <td>$createdAt</td>
                    <td>
                        <a href='edit_transaction.php?id=$id' class='btn btn-sm btn-warning'>Edit</a>
                        <a href='delete_transaction.php?id=$id' class='btn btn-sm btn-danger'>Delete</a>
                    </td>
                </tr>
            ";
        }

        return $html;
    }
}
