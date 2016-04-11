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
    public partial class MsBookForm : Form
    {
        BookShopDataContext dtBS = new BookShopDataContext();

        public MsBookForm()
        {
            InitializeComponent();
            

            refreshTable();
            addBookTypeID();
            clear();
            IdentityDisabled();
            IUDEnabled();
        }

        public void refreshTable()
        {
            var query = from x in dtBS.MsBooks select x;
                        
            dataGridBook.DataSource = query;
        }

        public void IUDEnabled()
        {
            butInsert.Enabled = true;
            butUpdate.Enabled = true;
            butDelete.Enabled = true;
            butSave.Enabled = false;
            butCancel.Enabled = false;
        }
        public void IUDDisabled()
        {
            butInsert.Enabled = false;
            butUpdate.Enabled = false;
            butDelete.Enabled = false;
            butSave.Enabled = true;
            butCancel.Enabled = true;
        }

        public void IdentityEnabled()
        {
            boxBookID.Enabled = false;
            boxBookTitle.Enabled = true;
            boxBookTypeID.Enabled = true;
            boxPrice.Enabled = true;
            boxTotalPage.Enabled = true;
            boxAuthor.Enabled = true;
            boxPublisher.Enabled = true;
            boxISBN.Enabled = true;
            boxStock.Enabled = true;
            
            
        }

        public void IdentityDisabled()
        {
            boxBookID.Enabled = false;
            boxBookTitle.Enabled = false;
            boxBookTypeID.Enabled = false;
            boxPrice.Enabled = false;
            boxTotalPage.Enabled = false;
            boxAuthor.Enabled = false;
            boxPublisher.Enabled = false;
            boxISBN.Enabled = false;
            boxStock.Enabled = false;
        }

        public void clear()
        {
            boxBookID.Text = "";
            boxBookTitle.Text = "";
            valueBookTypeName.Text = "";
            boxPrice.Text = "";
            boxTotalPage.Text = "1";
            boxAuthor.Text = "";
            boxPublisher.Text = "";
            boxISBN.Text = "";
            boxStock.Text = "0";
        }

        private void generateID()
        {
            int newID = 0;
            try
            {
                int lastID = dataGridBook.Rows.Count;
                string ID = dataGridBook.Rows[lastID - 1].Cells[0].Value.ToString();
                newID = int.Parse(ID.Substring(2));
            }
            catch (Exception)
            {
                newID = 0;
            }
            newID++;
            boxBookID.Text = "BO" + newID.ToString("000");
        }

        private void addBookTypeID()
        {
            var query = (from x in dtBS.MsBookTypes
                         select new
                         {
                             x.BookTypeID
                         }).ToList();

            foreach (var i in query)
            {
                boxBookTypeID.Items.Add(i.BookTypeID.ToString());
            }
        }

        private void boxBookTypeID_SelectedIndexChanged(object sender, EventArgs e)
        {
            var query = (from x in dtBS.MsBookTypes where x.BookTypeID == boxBookTypeID.Text select x).First();
            valueBookTypeName.Text = query.BookTypeName.ToString();
        }

        //cek numeric
        private bool checkNumeric(string numeric)
        {
            try
            {
                Int64.Parse(numeric);
            }
            catch (Exception)
            {
                return false;
            }
            return true;
        }

        public bool checkCapital()
        {
            string title = boxBookTitle.Text;
            string[] capital = title.Split(' ');
            for (int i = 0; i < capital.Length; i++)
            {
                char upper = Convert.ToChar(capital[i].Substring(0, 1));
                if(char.IsUpper(upper))
                {
                    return false;
                }
            }
            return true;
        }

        private void dataGridEmployee_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            int index = 0;

            index = dataGridBook.CurrentRow.Index;
            dataGridBook.Rows[index].Selected = true;

            boxBookID.Text = dataGridBook.Rows[index].Cells[0].Value.ToString();
            boxBookTitle.Text = dataGridBook.Rows[index].Cells[1].Value.ToString();
            boxBookTypeID.Text = dataGridBook.Rows[index].Cells[2].Value.ToString();
            boxPrice.Text = dataGridBook.Rows[index].Cells[3].Value.ToString();
            boxTotalPage.Text = dataGridBook.Rows[index].Cells[4].Value.ToString();
            boxAuthor.Text = dataGridBook.Rows[index].Cells[5].Value.ToString();
            boxPublisher.Text = dataGridBook.Rows[index].Cells[6].Value.ToString();
            boxISBN.Text = dataGridBook.Rows[index].Cells[7].Value.ToString();
            boxStock.Text = dataGridBook.Rows[index].Cells[8].Value.ToString();
        }

        // validasi button
        public static int flag = 0;

        private void butInsert_Click(object sender, EventArgs e)
        {
            clear();

            generateID();

            IUDDisabled();
            IdentityEnabled();
            dataGridBook.Enabled = false;


            flag = 1;
        }

        private void butUpdate_Click(object sender, EventArgs e)
        {
            IUDDisabled();
            IdentityEnabled();
            dataGridBook.Enabled = false;

            flag = 2;
        }

        private void butDelete_Click(object sender, EventArgs e)
        {
            DialogResult answer = MessageBox.Show("Are you sure want to delete " + boxBookID.Text + " ?", "Confirmation Message", MessageBoxButtons.YesNoCancel, MessageBoxIcon.Warning);
            if (answer == DialogResult.Yes)
            {
                var query = (from x in dtBS.MsBooks where x.BookID == boxBookID.Text select x).First();
                dtBS.MsBooks.DeleteOnSubmit(query);
                dtBS.SubmitChanges();
            }

            clear();
            refreshTable();
        }

        private void butCancel_Click(object sender, EventArgs e)
        {
            IUDEnabled();
            IdentityDisabled();
            dataGridBook.Enabled = true;
        }

        private void butSave_Click(object sender, EventArgs e)
        {
            if (boxBookTitle.Text == "")
            {
                MessageBox.Show("Book Title must be filled !");
            }
            else if (checkCapital() == true)
            {
                MessageBox.Show("First letter in each word of Book Title must be capital !");
            }
            else if (boxBookTypeID.SelectedIndex == -1)
            {
                MessageBox.Show("Book Type ID must be chosen !");
            }
            else if (boxPrice.Text == "")
            {
                MessageBox.Show("Price must be filled !");
            }
            else if (checkNumeric(boxPrice.Text) == false)
            {
                MessageBox.Show("Price must be numeric !");
            }
            else if (int.Parse(boxPrice.Text) < 5000 && int.Parse(boxPrice.Text) > 200000)
            {
                MessageBox.Show("Price must between 5000 and 200000!");
            }
            else if (boxAuthor.Text == "")
            {
                MessageBox.Show("Author must be filled !");
            }
            else if (boxPublisher.Text == "")
            {
                MessageBox.Show("Publisher must be filled !");
            }
            else if (!boxPublisher.Text.StartsWith("PT. "))
            {
                MessageBox.Show("Publisher must be started with 'PT. ' !");
            }
            else if (boxISBN.Text == "")
            {
                MessageBox.Show("ISBN must be filled !");
            }
            else if (boxISBN.Text.Length-1 == 13)
            {
                MessageBox.Show("ISBN must be 13 characters !");
            }
            else if (checkNumeric(boxISBN.Text) == false)
            {
                MessageBox.Show("ISBN must be numeric !");
            }
            else
            {
                if (flag == 1)
                {
                    MsBook book = new MsBook();
                    book.BookID = boxBookID.Text;
                    book.BookTitle = boxBookTitle.Text;
                    book.BookTypeID = boxBookTypeID.Text;
                    book.Price = int.Parse(boxPrice.Text);
                    book.TotalPage = int.Parse(boxTotalPage.Text);
                    book.Author = boxAuthor.Text;
                    book.Publisher = boxPublisher.Text;
                    book.ISBN = boxISBN.Text;
                    book.Stock = int.Parse(boxStock.Text);
                    dtBS.MsBooks.InsertOnSubmit(book);
                    dtBS.SubmitChanges();
                    MessageBox.Show("Data succesfuly inserted !");

                    dataGridBook.Enabled = true;
                    IUDEnabled();
                    IdentityDisabled();
                    clear();
                    refreshTable();
                }
                else if (flag == 2)
                {
                    var query = (from x in dtBS.MsBooks where x.BookID == boxBookID.Text select x).First();
                    query.BookID = boxBookID.Text;
                    query.BookTitle = boxBookTitle.Text;
                    query.BookTypeID = boxBookTypeID.Text;
                    query.Price = int.Parse(boxPrice.Text);
                    query.TotalPage = int.Parse(boxTotalPage.Text);
                    query.Author = boxAuthor.Text;
                    query.Publisher = boxPublisher.Text;
                    query.ISBN = boxISBN.Text;
                    query.Stock = int.Parse(boxStock.Text);
                    dtBS.MsBooks.InsertOnSubmit(query);
                    dtBS.SubmitChanges();
                    MessageBox.Show("Data succesfuly updated !");

                    dataGridBook.Enabled = true;
                    IUDEnabled();
                    IdentityDisabled();
                    clear();
                    refreshTable();
                }
            }
        }

        private void MsBookForm_Load(object sender, EventArgs e)
        {

        }

        

    }
}
