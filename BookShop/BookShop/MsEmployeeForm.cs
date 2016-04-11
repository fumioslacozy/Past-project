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
    public partial class MsEmployeeForm : Form
    {
        BookShopDataContext dtBS = new BookShopDataContext();

        public MsEmployeeForm()
        {
            InitializeComponent();

            dataGridPassword.Hide();

            refreshTable();
            addRole();
            
            IdentityDisabled();
            IUDEnabled();
            

        }


        public void addRole()
        {
            boxRole.Items.Add("—Choose—");
            boxRole.Items.Add("Admin");
            boxRole.Items.Add("Shopkeeper");
            boxRole.SelectedIndex = 0;
        }

        public void refreshTable()
        {
            var query = from x in dtBS.MsEmployees
                        select new
                        {
                            x.EmployeeID,
                            x.Name,
                            x.Role,
                            x.Email
                        };
            dataGridEmployee.DataSource = query;

            var query1 = from x in dtBS.MsEmployees
                        select new
                        {
                            x.Password
                        };
            dataGridPassword.DataSource = query1;
        }
        public int checkLetter(string password)
        {
            int letter = 0;
            for (int i = 0; i < password.Length; i++)
            {
                if (char.IsLetter(password[i]))
                {
                    letter++;
                }
            }
            return letter;
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
            boxEmployeeID.Enabled = false;
            boxName.Enabled = true;
            boxEmail.Enabled = true;
            boxPassword.Enabled = true;
            boxRole.SelectedIndex = 0;
            boxRole.Enabled = true;
        }

        public void IdentityDisabled()
        {
            boxEmployeeID.Enabled = false;
            boxName.Enabled = false;
            boxEmail.Enabled = false;
            boxPassword.Enabled = false;
            boxRole.SelectedIndex = 0;
            boxRole.Enabled = false;
        }

        public void clear()
        {
            boxEmployeeID.Text = "";
            boxName.Text = "";
            boxEmail.Text = "";
            boxPassword.Text = "";
            boxRole.SelectedIndex = 0;
        }

        private void generateID()
        {
            int newID = 0;
            try
            {
                int lastID = dataGridEmployee.Rows.Count;
                string ID = dataGridEmployee.Rows[lastID - 1].Cells[0].Value.ToString();
                newID = int.Parse(ID.Substring(2));
            }
            catch (Exception)
            {
                newID = 0;
            }
            newID++;
            boxEmployeeID.Text = "EM" + newID.ToString("000");
        }


        private void dataGridEmployee_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            int index = 0;

            index = dataGridEmployee.CurrentRow.Index;
            dataGridEmployee.Rows[index].Selected = true;

            boxEmployeeID.Text = dataGridEmployee.Rows[index].Cells[0].Value.ToString();
            boxName.Text = dataGridEmployee.Rows[index].Cells[1].Value.ToString();
            boxRole.Text = dataGridEmployee.Rows[index].Cells[2].Value.ToString();
            boxEmail.Text = dataGridEmployee.Rows[index].Cells[3].Value.ToString();
            boxPassword.Text = dataGridPassword.Rows[index].Cells[0].Value.ToString();
        }

        // validasi button
        public static int flag = 0;

        private void butInsert_Click(object sender, EventArgs e)
        {
            clear();

            generateID();

            IUDDisabled();
            IdentityEnabled();
            dataGridEmployee.Enabled = false;


            flag = 1;
        }

        private void butUpdate_Click(object sender, EventArgs e)
        {
            IUDDisabled();
            IdentityEnabled();
            dataGridEmployee.Enabled = false;

            flag = 2;
        }

        private void butDelete_Click(object sender, EventArgs e)
        {
            DialogResult answer = MessageBox.Show("Are you sure want to delete " + boxEmployeeID.Text + " ?", "Confirmation Message", MessageBoxButtons.YesNoCancel, MessageBoxIcon.Warning);
            if (answer == DialogResult.Yes)
            {
                var query = (from x in dtBS.MsEmployees where x.EmployeeID == boxEmployeeID.Text select x).First();
                dtBS.MsEmployees.DeleteOnSubmit(query);
                dtBS.SubmitChanges();
            }

            clear();
            refreshTable();
        }

        private void butCancel_Click(object sender, EventArgs e)
        {
            IUDEnabled();
            IdentityDisabled();
            dataGridEmployee.Enabled = true;
        }

        private void butSave_Click(object sender, EventArgs e)
        {
            if (boxName.Text == "")
            {
                MessageBox.Show("Name must be filled!");
            }
            else if (boxEmail.Text == "")
            {
                MessageBox.Show("Email must be filled!");
            }
            else if (boxEmail.Text.Length < 3)
            {
                MessageBox.Show("Email must be at least 10 characters!");
            }
            else if (boxEmail.Text.IndexOf(".") == -1)
            {
                MessageBox.Show("Email must contain at least 1 ‘.’ (dot) !");
            }
            else if (boxEmail.Text.IndexOf("@") == -1)
            {
                MessageBox.Show("Email must contain at least 1 ‘@’ (at) !");
            }
            else if (boxEmail.Text.StartsWith("@") || boxEmail.Text.StartsWith(".") || boxEmail.Text.EndsWith("@") || boxEmail.Text.EndsWith("."))
            {
                MessageBox.Show("Email must not be started or ended with '@' (at) or '.' (dot) !");
            }
            else if (boxEmail.Text.IndexOf("@") + 1 == boxEmail.Text.IndexOf(".") || boxEmail.Text.IndexOf(".") + 1 == boxEmail.Text.IndexOf("@"))
            {
                MessageBox.Show("Email's '@' (at) and '.' (dot) must not be side by side !");
            }
            else if (boxEmail.Text.Substring(boxEmail.Text.LastIndexOf(".")).IndexOf("@") != -1)
            {
                MessageBox.Show("Email's '@' (at) may not after the last '.' (dot) !");
            }
            else if (boxEmail.Text.IndexOf("yahoo") == -1 && boxEmail.Text.IndexOf("gmail") == -1)
            {
                MessageBox.Show("Email domain must be 'yahoo' or 'gmail' !");
            }
            else if (boxPassword.Text == "")
            {
                MessageBox.Show("Password must be filled !");
            }
            else if (boxPassword.Text.Length < 8)
            {
                MessageBox.Show("Password must be 8 characters minimum !");
            }
            else if (checkLetter(boxPassword.Text) < 5)
            {
                MessageBox.Show("Password at least contain 5 alphabets minimum !");
            }
            else if (boxPassword.Text.IndexOf(" ") != -1)
            {
                MessageBox.Show("Password may not contain space !");
            }
            else if (boxRole.SelectedIndex == 0)
            {
                MessageBox.Show("Role must be chosen !");
            }
            else
            {
                if (flag == 1)
                {
                    MsEmployee employee = new MsEmployee();
                    employee.EmployeeID = boxEmployeeID.Text;
                    employee.Name = boxName.Text;
                    employee.Email = boxEmail.Text;
                    employee.Password = boxPassword.Text;
                    employee.Role = boxRole.Text;
                    dtBS.MsEmployees.InsertOnSubmit(employee);
                    dtBS.SubmitChanges();
                    MessageBox.Show("Data succesfuly inserted !");

                    dataGridEmployee.Enabled = true;
                    IUDEnabled();
                    IdentityDisabled();
                    clear();
                    refreshTable();
                }
                else if (flag == 2)
                {
                    var query = (from x in dtBS.MsEmployees where x.EmployeeID == boxEmployeeID.Text select x).First();
                    query.EmployeeID = boxEmployeeID.Text;
                    query.Name = boxName.Text;
                    query.Email = boxEmail.Text;
                    query.Password = boxPassword.Text;
                    query.Role = boxRole.Text;
                    dtBS.MsEmployees.InsertOnSubmit(query);
                    dtBS.SubmitChanges();
                    MessageBox.Show("Data succesfuly updated !");

                    dataGridEmployee.Enabled = true;
                    IUDEnabled();
                    IdentityDisabled();
                    clear();
                    refreshTable();
                }
            }


        }

        private void MsEmployeeForm_Load(object sender, EventArgs e)
        {

        }


  

    }
}
