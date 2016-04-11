using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using Excel = Microsoft.Office.Interop.Excel; 


namespace WindowsFormsApplication1
{
    public partial class ViewTransactionForm : Form
    {
        BookShopDataContext dtBS = new BookShopDataContext();

        public ViewTransactionForm()
        {
            InitializeComponent();
            inititalState();
        }

        public void inititalState()
        {
            addMonth();
            addYear();
            refreshTable();
            refreshDetail();
            clear();
        }

        public void addMonth()
        {
            boxMonth.Items.Add("-Choose-");
            boxMonth.Items.Add("January");
            boxMonth.Items.Add("February");
            boxMonth.Items.Add("March");
            boxMonth.Items.Add("April");
            boxMonth.Items.Add("May");
            boxMonth.Items.Add("June");
            boxMonth.Items.Add("July");
            boxMonth.Items.Add("August");
            boxMonth.Items.Add("September");
            boxMonth.Items.Add("October");
            boxMonth.Items.Add("November");
            boxMonth.Items.Add("December");
        }

        public void addYear()
        {
            boxYear.Items.Add("-Choose-");
            boxYear.Items.Add("2013");
            boxYear.Items.Add("2014");
            boxYear.Items.Add("2015");
        }

        public void refreshTable()
        {
            var query = from x in dtBS.HeaderTransactions
                        select new
                        {
                            x.TrID,
                            x.CustomerName,
                            x.DateTransaction,
                            x.TotalTransaction,
                            x.PaymentType
                        };  
            dataGridHeaderTransaction.DataSource = query;

        }
        public void refreshDetail()
        {
            var query1 = from x in dtBS.DetailTransactions
                         where x.TrID == dataGridHeaderTransaction.Rows[0].Cells[0].Value.ToString()
                         select new
                         {
                             x.BookID,
                             x.Qty,
                             x.TotalPrice
                         };
            dataGridDetailTransaction.DataSource = query1;
        }

        public void clear()
        {
            boxMonth.SelectedIndex = 0;
            boxYear.SelectedIndex = 0;
            valueTransactionID.Text = "";
            valueCustomerName.Text = "";
            valueDateTransaction.Text = "";            
            valueTotalTransaction.Text = "";
            valuePaymentType.Text = "";
            valueBookID.Text = "";
            valueBookTitle.Text = "";
            valueBookTypeID.Text = "";
            valuePrice.Text = "";
            valueTotalPage.Text = "";
            valueAuthor.Text = "";
            valuePublisher.Text = "";
            valueISBN.Text = "";
            valueQty.Text = "";
            valueTotalPrice.Text = "";
        }

        private void dataGridHeaderTransaction_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            int index = 0;

            index = dataGridHeaderTransaction.CurrentRow.Index;
            dataGridHeaderTransaction.Rows[index].Selected = true;

            valueTransactionID.Text = dataGridHeaderTransaction.Rows[index].Cells[0].Value.ToString();
            valueCustomerName.Text = dataGridHeaderTransaction.Rows[index].Cells[1].Value.ToString();
            valueDateTransaction.Text = dataGridHeaderTransaction.Rows[index].Cells[2].Value.ToString();
            valueTotalTransaction.Text = dataGridHeaderTransaction.Rows[index].Cells[3].Value.ToString();
            valuePaymentType.Text = dataGridHeaderTransaction.Rows[index].Cells[4].Value.ToString();

            var query1 = from x in dtBS.DetailTransactions
                         where x.TrID == valueTransactionID.Text
                         select new
                         {
                             x.BookID,
                             x.Qty,
                             x.TotalPrice
                         };
            dataGridDetailTransaction.DataSource = query1;
        }

        private void dataGridDetailTransaction_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            int index = 0;

            index = dataGridDetailTransaction.CurrentRow.Index;
            dataGridDetailTransaction.Rows[index].Selected = true;

            string detailBookID = dataGridDetailTransaction.Rows[index].Cells[0].Value.ToString();

            var query = (from x in dtBS.MsBooks where x.BookID == detailBookID select x).First();
            valueBookID.Text = query.BookID.ToString();
            valueBookTitle.Text = query.BookTitle.ToString();
            valueBookTypeID.Text = query.BookTypeID.ToString();
            valuePrice.Text = query.Price.ToString();
            valueTotalPage.Text = query.TotalPage.ToString();
            valueAuthor.Text = query.Author.ToString();
            valuePublisher.Text = query.Publisher.ToString();
            valueISBN.Text = query.ISBN.ToString();
            valueQty.Text = dataGridDetailTransaction.Rows[index].Cells[1].Value.ToString();
            valueTotalPrice.Text = dataGridDetailTransaction.Rows[index].Cells[2].Value.ToString();

            var query1 = (from x in dtBS.MsBookTypes where x.BookTypeID == valueBookTypeID.Text select x).First();
            valueBookTypeName.Text = query1.BookTypeName.ToString();

        }

        private void butGenerateReport_Click(object sender, EventArgs e)
        {
            Excel.Application exc;
            Excel.Workbook book;
            Excel.Worksheet sheet;

            if (boxMonth.SelectedIndex == 0)
            {
                MessageBox.Show("Month must be chosen !");
            }
            else if (boxYear.SelectedIndex == 0)
            {
                MessageBox.Show("Year must be chosen !");
            }
            else 
            {
                exc = new Excel.Application();
                if (exc == null)
                {
                    MessageBox.Show("Excel couldn't be started");
                    return;
                }
                else
                {
                    book = exc.Workbooks.Add();
                    sheet = book.Worksheets[1];
                    //title
                    var title = sheet.Range["A1", "G1"];
                    title.Merge();
                    sheet.Range["A1"].Value = "BlueJack BookShop Report Period : "+boxMonth.Text+" "+boxYear.Text;
                    title.Font.Bold = true;
                    title.Font.Size = 14;
                    title.HorizontalAlignment = 3;
                    //subtitle
                    var subtitle = sheet.Range["A3","G3"];
                    subtitle.Font.Bold = true;
                    subtitle.HorizontalAlignment = 3;
                    sheet.Range["A3"].Value = "Transaction ID";
                    sheet.Range["A3"].BorderAround(Excel.XlLineStyle.xlContinuous);
                    sheet.Range["B3"].Value = "Staff ID";
                    sheet.Range["B3"].BorderAround(Excel.XlLineStyle.xlContinuous);
                    sheet.Range["C3"].Value = "Date Transaction";
                    sheet.Range["C3"].BorderAround(Excel.XlLineStyle.xlContinuous);
                    sheet.Range["D3"].Value = "Book Title";
                    sheet.Range["D3"].BorderAround(Excel.XlLineStyle.xlContinuous);
                    sheet.Range["E3"].Value = "Price";
                    sheet.Range["E3"].BorderAround(Excel.XlLineStyle.xlContinuous);
                    sheet.Range["F3"].Value = "Qty";
                    sheet.Range["F3"].BorderAround(Excel.XlLineStyle.xlContinuous);
                    sheet.Range["G3"].Value = "Total Price";
                    sheet.Range["G3"].BorderAround(Excel.XlLineStyle.xlContinuous);

                    //isi
                    int row = 3;
                    int grandtotal = 0;
                    for (int i = 0; i < dataGridHeaderTransaction.Rows.Count; i++)
                    {
                        row++;
                        var query = (from x in dtBS.HeaderTransactions
                                     where x.TrID == dataGridHeaderTransaction.Rows[i].Cells[0].Value.ToString()
                                      select new
                                      {
                                          x.EmployeeID
                                      }).First();
                        sheet.Range["A" + row].Value = dataGridHeaderTransaction.Rows[i].Cells[0].Value.ToString();
                        sheet.Range["B" + row].Value = query.EmployeeID;
                        sheet.Range["C" + row].Value = dataGridHeaderTransaction.Rows[i].Cells[2].Value.ToString();
                        for (int k = 0; k < dataGridDetailTransaction.Rows.Count; k++)
                        {
                            int row2 = row;

                            var query1=  from x in dtBS.DetailTransactions
                                         where x.TrID == dataGridHeaderTransaction.Rows[i].Cells[0].Value.ToString()
                                         select new
                                         {
                                             x.BookID,
                                             x.Qty,
                                             x.TotalPrice
                                         };
                            dataGridDetailTransaction.DataSource = query1;

                            string detailBookID = dataGridDetailTransaction.Rows[k].Cells[0].Value.ToString();
                            var query2 = (from x in dtBS.MsBooks where x.BookID == detailBookID select x).First();

                            sheet.Range["D" + row].Value = query2.BookTitle;
                            sheet.Range["E" + row].Value = query2.Price;
                            sheet.Range["F" + row].Value = dataGridDetailTransaction.Rows[k].Cells[1].Value.ToString();
                            sheet.Range["G" + row].Value = dataGridDetailTransaction.Rows[k].Cells[2].Value.ToString();
                            grandtotal += int.Parse(dataGridDetailTransaction.Rows[k].Cells[2].Value.ToString());
                            row++;
                            if (k == (dataGridDetailTransaction.Rows.Count)-1)
                            {
                                
                                sheet.Range["F" + row].Value = "Subtotal";
                                sheet.Range["G" + row].Value = "=sum(G" + row2 + ":G" + (row - 1) + ")";
                            }
                        }
                    }
                    sheet.Range["A3", "A" + row].BorderAround(Excel.XlLineStyle.xlContinuous);
                    sheet.Range["B3", "B" + row].BorderAround(Excel.XlLineStyle.xlContinuous);
                    sheet.Range["C3", "C" + row].BorderAround(Excel.XlLineStyle.xlContinuous);
                    sheet.Range["D3", "D" + row].BorderAround(Excel.XlLineStyle.xlContinuous);
                    sheet.Range["E3", "E" + row].BorderAround(Excel.XlLineStyle.xlContinuous);
                    sheet.Range["F3", "F" + row].BorderAround(Excel.XlLineStyle.xlContinuous);
                    sheet.Range["G3", "G" + row].BorderAround(Excel.XlLineStyle.xlContinuous);

                    row++;
                    sheet.Range["F" + row].Value = "Grand Total";
                    sheet.Range["F" + row].BorderAround(Excel.XlLineStyle.xlContinuous);
                    sheet.Range["G" + row].Value = grandtotal;
                    sheet.Range["F" + row].BorderAround(Excel.XlLineStyle.xlContinuous);

                    sheet.Range["A3", "A" + row].Columns.AutoFit();
                    sheet.Range["B3", "B" + row].Columns.AutoFit();
                    sheet.Range["C3", "C" + row].Columns.AutoFit();
                    sheet.Range["D3", "D" + row].Columns.AutoFit();
                    sheet.Range["E3", "E" + row].Columns.AutoFit();
                    sheet.Range["F3", "F" + row].Columns.AutoFit();
                    sheet.Range["G3", "G" + row].Columns.AutoFit();

                    String path = Application.StartupPath +"/Transaction Report("+boxMonth.Text+" "+ boxYear.Text+").xlsx";
                    book.SaveAs(path);
                    MessageBox.Show("Report Created Successfully on : " + path);
                    refreshDetail();
                    exc.Quit();
                }
            }
        }

        private void ViewTransactionForm_Load(object sender, EventArgs e)
        {

        }
    }
}
