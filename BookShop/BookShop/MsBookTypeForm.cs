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
    public partial class MsBookTypeForm : Form
    {
        BookShopDataContext dtBS = new BookShopDataContext();

        public MsBookTypeForm()
        {
            InitializeComponent();

            refreshTable();

            IdentityDisabled();
            IUDEnabled();
        }

        public void refreshTable()
        {
            var query = from x in dtBS.MsBookTypes
                        select new
                        {
                            x.BookTypeID,
                            x.BookTypeName
                        };
            dataGridBookType.DataSource = query;
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
            boxBookTypeID.Enabled = false;
            boxBookTypeName.Enabled = true;

        }

        public void IdentityDisabled()
        {
            boxBookTypeID.Enabled = false;
            boxBookTypeName.Enabled = false;
        }

        public void clear()
        {
            boxBookTypeName.Text = "";
        }

        private void generateID()
        {
            int newID = 0;
            try
            {
                int lastID = dataGridBookType.Rows.Count;
                string ID = dataGridBookType.Rows[lastID - 1].Cells[0].Value.ToString();
                newID = int.Parse(ID.Substring(2));
            }
            catch (Exception)
            {
                newID = 0;
            }
            newID++;
            boxBookTypeID.Text = "BT" + newID.ToString("000");
        }


        private void dataGridBookType_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            int index = 0;

            index = dataGridBookType.CurrentRow.Index;
            dataGridBookType.Rows[index].Selected = true;

            boxBookTypeID.Text = dataGridBookType.Rows[index].Cells[0].Value.ToString();
            boxBookTypeName.Text = dataGridBookType.Rows[index].Cells[1].Value.ToString();
        }

        // validasi button
        public static int flag = 0;

        private void butInsert_Click(object sender, EventArgs e)
        {
            clear();

            generateID();

            IUDDisabled();
            IdentityEnabled();
            dataGridBookType.Enabled = false;


            flag = 1;
        }

        private void butUpdate_Click(object sender, EventArgs e)
        {
            IUDDisabled();
            IdentityEnabled();
            dataGridBookType.Enabled = false;

            flag = 2;
        }

        private void butDelete_Click(object sender, EventArgs e)
        {
            DialogResult answer = MessageBox.Show("Are you sure want to delete " + boxBookTypeID.Text + " ?", "Confirmation Message", MessageBoxButtons.YesNoCancel, MessageBoxIcon.Warning);
            if (answer == DialogResult.Yes)
            {
                var query = (from x in dtBS.MsBookTypes where x.BookTypeID == boxBookTypeID.Text select x).First();
                dtBS.MsBookTypes.DeleteOnSubmit(query);
                dtBS.SubmitChanges();
            }

            clear();
            refreshTable();
        }

        private void butCancel_Click(object sender, EventArgs e)
        {
            IUDEnabled();
            IdentityDisabled();
            dataGridBookType.Enabled = true;
        }

        private void butSave_Click(object sender, EventArgs e)
        {
            if (boxBookTypeName.Text == "")
            {
                MessageBox.Show("Book Type Name must be filled !");
            }
            else if (boxBookTypeName.Text.IndexOf(" ") == -1)
            {
                MessageBox.Show("Book Type Name must 2 words minimum !");
            }
            else
            {
                if (flag == 1)
                {
                    MsBookType booktype = new MsBookType();
                    booktype.BookTypeID = boxBookTypeID.Text;
                    booktype.BookTypeName = boxBookTypeName.Text;
                    dtBS.MsBookTypes.InsertOnSubmit(booktype);
                    dtBS.SubmitChanges();
                    MessageBox.Show("Data succesfuly inserted !");

                    dataGridBookType.Enabled = true;
                    IUDEnabled();
                    IdentityDisabled();
                    clear();
                    refreshTable();
                }
                else if (flag == 2)
                {
                    var query = (from x in dtBS.MsBookTypes where x.BookTypeID == boxBookTypeID.Text select x).First();
                    query.BookTypeID = boxBookTypeID.Text;
                    query.BookTypeName = boxBookTypeName.Text;

                    dtBS.MsBookTypes.InsertOnSubmit(query);
                    dtBS.SubmitChanges();
                    MessageBox.Show("Data succesfuly updated !");

                    dataGridBookType.Enabled = true;
                    IUDEnabled();
                    IdentityDisabled();
                    clear();
                    refreshTable();
                }
            }
        }

        private void MsBookTypeForm_Load(object sender, EventArgs e)
        {

        }

    }
}
