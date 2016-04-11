using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace WindowsFormsApplication1
{
    public partial class BuyBookForm : Form
    {
        BookShopDataContext dtBS = new BookShopDataContext();
        public static string id = "";

        public BuyBookForm()
        {
            InitializeComponent();
            initialState();
            refreshTable();
            clear();
        }

        public void initialState()
        {
            valueEmployeeID.Text = id;
            valueDateTime.Text = DateTime.Today.ToShortDateString();
            generateID();
            addPaymentType();
            boxPaymentType.SelectedIndex = 0;
            valueTotal.Text = "0";
            detailDisabled();
            RSDisabled();
            addDataGridCart();
        }
        public void addDataGridCart()
        {
            dataGridCart.Columns.Add("BookID" , "BookID");
            dataGridCart.Columns.Add("BookTitle", "BookTitle");
            dataGridCart.Columns.Add("Qty", "Qty");
            dataGridCart.Columns.Add("Price", "Price");
        }
        public void generateID()
        {
            try
            {
                var query = (from x in dtBS.HeaderTransactions orderby x.TrID descending select x).First();
                String formatID = query.TrID;
                valueTransactionID.Text = "TR" + (Int32.Parse(formatID.Substring(2)) + 1).ToString("000");
            }
            catch (Exception)
            {
                valueTransactionID.Text = "TR001";
            }
        }

        private void addPaymentType()
        {
            boxPaymentType.Items.Add("-Choose-");
            boxPaymentType.Items.Add("Cash");
            boxPaymentType.Items.Add("Credit");
        }

        public void refreshTable()
        {
            var query = from x in dtBS.MsBooks select x;
            dataGridBook.DataSource = query;
        }

        public void clear()
        {
            valueBookID.Text = "";
            valueBookTitle.Text = "";
            valueBookTypeID.Text = "";
            valuePrice.Text = "";
            valueTotalPage.Text = "";
            valueAuthor.Text = "";
            valuePublisher.Text = "";
            valueISBN.Text = "";
            valueStock.Text = "";
            boxQty.Text = "0";
            boxCustomerName.Text = "";
            boxPaymentType.SelectedIndex = 0;
        }

        public void detailEnabled()
        {
            boxCustomerName.Enabled = true;
            boxPaymentType.Enabled = true;
        }

        public void detailDisabled()
        {
            boxCustomerName.Enabled = false;
            boxPaymentType.Enabled = false;
        }

        public void RSEnabled()
        {
            butRemove.Enabled = true;
            butSubmit.Enabled = true;
        }

        public void RSDisabled()
        {
            butRemove.Enabled = false;
            butSubmit.Enabled = false;
        }

        private void dataGridBook_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            int index = 0;

            index = dataGridBook.CurrentRow.Index;
            dataGridBook.Rows[index].Selected = true;

            valueBookID.Text = dataGridBook.Rows[index].Cells[0].Value.ToString();
            valueBookTitle.Text = dataGridBook.Rows[index].Cells[1].Value.ToString();
            valueBookTypeID.Text = dataGridBook.Rows[index].Cells[2].Value.ToString();
            valuePrice.Text = dataGridBook.Rows[index].Cells[3].Value.ToString();
            valueTotalPage.Text = dataGridBook.Rows[index].Cells[4].Value.ToString();
            valueAuthor.Text = dataGridBook.Rows[index].Cells[5].Value.ToString();
            valuePublisher.Text = dataGridBook.Rows[index].Cells[6].Value.ToString();
            valueISBN.Text = dataGridBook.Rows[index].Cells[7].Value.ToString();
            valueStock.Text = dataGridBook.Rows[index].Cells[8].Value.ToString();
        }

        private void butAdd_Click(object sender, EventArgs e)
        {
            int sameProduct = 0;
            if (valueBookID.Text == "")
            {
                MessageBox.Show("Please choose one of the book !");
            }
            else if (int.Parse(valueStock.Text) == 0)
            {
                MessageBox.Show("This book is out of stock !");
            }
            else if ((int)boxQty.Value > int.Parse(valueStock.Text))
            {
                MessageBox.Show("This book is only have" + valueStock.Text + "book(s) left");
            }
            else
            {
                if (dataGridCart.Rows.Count > 0)
                {
                    for (int i = 0; i < dataGridCart.Rows.Count; i++)
                    {
                        if (valueBookID.Text.ToString() == dataGridCart.Rows[i].Cells[0].Value.ToString())
                        {
                            MessageBox.Show("Book is already in Cart !");
                            sameProduct++;
                        }
                    }
                }
                if (sameProduct == 0)
                {
                    int price = (int.Parse(valuePrice.Text) * (int)boxQty.Value);
                    dataGridCart.Rows.Add(valueBookID.Text, valueBookTitle.Text, boxQty.Value.ToString(), price);
                    int total = int.Parse(valueTotal.Text);
                    total += price;
                    valueTotal.Text = total.ToString();
                    //kurangin stock
                    var query = (from x in dtBS.MsBooks where x.BookID == valueBookID.Text select x).First();
                    query.Stock -= (int)boxQty.Value;
                    dtBS.SubmitChanges();

                    refreshTable();

                    RSEnabled();
                    detailEnabled();
                }

            }
        }

        private void butRemove_Click(object sender, EventArgs e)
        {
            int index = 0;

            index = dataGridCart.CurrentRow.Index;
            dataGridCart.Rows[index].Selected = true;

            //boxProductID.Text = dataGridProduct.Rows[index].Cells[0].Value.ToString();
            int qty = int.Parse(dataGridCart.Rows[index].Cells[2].Value.ToString());
            int price = int.Parse(dataGridCart.Rows[index].Cells[3].Value.ToString());

            int total = int.Parse(valueTotal.Text);
            total -= price;
            valueTotal.Text = total.ToString();
            var query = (from x in dtBS.MsBooks where x.BookID == valueBookID.Text select x).First();
            query.Stock += qty;
            dtBS.SubmitChanges();

            refreshTable();

            dataGridCart.Rows.RemoveAt(dataGridCart.CurrentRow.Index);
            
            if(dataGridCart.Rows.Count < 1)
            {
                RSDisabled();
            }
        }

        private void butSubmit_Click(object sender, EventArgs e)
        {
            if(boxCustomerName.Text == "")
            {
                MessageBox.Show("Customer Name must be filled !");
            }
            else if (boxCustomerName.Text.IndexOf(" ") == -1)
            {
                MessageBox.Show("Customer Name must 2 words minimum !");
            }
            else if (boxPaymentType.SelectedIndex == 0)
            {
                MessageBox.Show("Payment Type must be chosen !");
            }
            else
            {
                
                HeaderTransaction header = new HeaderTransaction();
                header.TrID = valueTransactionID.Text;
                header.CustomerName = boxCustomerName.Text;
                header.DateTransaction = Convert.ToDateTime(valueDateTime.Text);
                header.TotalTransaction = int.Parse(valueTotal.Text);
                header.PaymentType = boxPaymentType.Text;
                header.EmployeeID = valueEmployeeID.Text;
                dtBS.HeaderTransactions.InsertOnSubmit(header);
                dtBS.SubmitChanges();

                for(int i = 0 ; i < dataGridCart.Rows.Count ;i++)
                {
                    DetailTransaction detail = new DetailTransaction();
                    detail.TrID = valueTransactionID.Text;
                    detail.BookID = dataGridCart.Rows[i].Cells[0].Value.ToString();
                    detail.Qty = int.Parse(dataGridCart.Rows[i].Cells[2].Value.ToString());
                    detail.TotalPrice = int.Parse(dataGridCart.Rows[i].Cells[3].Value.ToString());
                    dtBS.DetailTransactions.InsertOnSubmit(detail);
                    dtBS.SubmitChanges();
                }

                
                MessageBox.Show("Data succesfuly inserted !");
                refreshTable();
                generateID();
                dataGridCart.Rows.Clear();
                clear();
                RSDisabled();
                detailDisabled();
                

            }
        }

        private void BuyBookForm_Load(object sender, EventArgs e)
        {

        }




    }
}
