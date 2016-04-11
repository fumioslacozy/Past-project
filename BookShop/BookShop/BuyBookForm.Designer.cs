namespace WindowsFormsApplication1
{
    partial class BuyBookForm
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.txtBuyBook = new System.Windows.Forms.Label();
            this.groupBoxBookList = new System.Windows.Forms.GroupBox();
            this.valueStock = new System.Windows.Forms.Label();
            this.valueISBN = new System.Windows.Forms.Label();
            this.valuePublisher = new System.Windows.Forms.Label();
            this.valueAuthor = new System.Windows.Forms.Label();
            this.valueTotalPage = new System.Windows.Forms.Label();
            this.valuePrice = new System.Windows.Forms.Label();
            this.valueBookTypeID = new System.Windows.Forms.Label();
            this.valueBookTitle = new System.Windows.Forms.Label();
            this.valueBookID = new System.Windows.Forms.Label();
            this.boxQty = new System.Windows.Forms.NumericUpDown();
            this.label4 = new System.Windows.Forms.Label();
            this.butAdd = new System.Windows.Forms.Button();
            this.txtTotalPage = new System.Windows.Forms.Label();
            this.txtPrice = new System.Windows.Forms.Label();
            this.txtBookTypeID = new System.Windows.Forms.Label();
            this.txtBookTitle = new System.Windows.Forms.Label();
            this.txtStock = new System.Windows.Forms.Label();
            this.txtISBN = new System.Windows.Forms.Label();
            this.txtPublisher = new System.Windows.Forms.Label();
            this.txtAuthor = new System.Windows.Forms.Label();
            this.txtBookID = new System.Windows.Forms.Label();
            this.dataGridBook = new System.Windows.Forms.DataGridView();
            this.groupBoxCart = new System.Windows.Forms.GroupBox();
            this.butRemove = new System.Windows.Forms.Button();
            this.dataGridCart = new System.Windows.Forms.DataGridView();
            this.groupBoxCustomerInformation = new System.Windows.Forms.GroupBox();
            this.boxPaymentType = new System.Windows.Forms.ComboBox();
            this.boxCustomerName = new System.Windows.Forms.TextBox();
            this.txtPaymentType = new System.Windows.Forms.Label();
            this.txtCustomerName = new System.Windows.Forms.Label();
            this.txtTotalTransaction = new System.Windows.Forms.Label();
            this.butSubmit = new System.Windows.Forms.Button();
            this.valueTotal = new System.Windows.Forms.Label();
            this.txtRp = new System.Windows.Forms.Label();
            this.txtTransactionID = new System.Windows.Forms.Label();
            this.valueTransactionID = new System.Windows.Forms.Label();
            this.txtEmployeeID = new System.Windows.Forms.Label();
            this.valueEmployeeID = new System.Windows.Forms.Label();
            this.txtDateTime = new System.Windows.Forms.Label();
            this.valueDateTime = new System.Windows.Forms.Label();
            this.groupBoxBookList.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.boxQty)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridBook)).BeginInit();
            this.groupBoxCart.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridCart)).BeginInit();
            this.groupBoxCustomerInformation.SuspendLayout();
            this.SuspendLayout();
            // 
            // txtBuyBook
            // 
            this.txtBuyBook.AutoSize = true;
            this.txtBuyBook.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtBuyBook.Location = new System.Drawing.Point(297, 18);
            this.txtBuyBook.Name = "txtBuyBook";
            this.txtBuyBook.Size = new System.Drawing.Size(130, 25);
            this.txtBuyBook.TabIndex = 5;
            this.txtBuyBook.Text = "BUY BOOK";
            // 
            // groupBoxBookList
            // 
            this.groupBoxBookList.Controls.Add(this.valueStock);
            this.groupBoxBookList.Controls.Add(this.valueISBN);
            this.groupBoxBookList.Controls.Add(this.valuePublisher);
            this.groupBoxBookList.Controls.Add(this.valueAuthor);
            this.groupBoxBookList.Controls.Add(this.valueTotalPage);
            this.groupBoxBookList.Controls.Add(this.valuePrice);
            this.groupBoxBookList.Controls.Add(this.valueBookTypeID);
            this.groupBoxBookList.Controls.Add(this.valueBookTitle);
            this.groupBoxBookList.Controls.Add(this.valueBookID);
            this.groupBoxBookList.Controls.Add(this.boxQty);
            this.groupBoxBookList.Controls.Add(this.label4);
            this.groupBoxBookList.Controls.Add(this.butAdd);
            this.groupBoxBookList.Controls.Add(this.txtTotalPage);
            this.groupBoxBookList.Controls.Add(this.txtPrice);
            this.groupBoxBookList.Controls.Add(this.txtBookTypeID);
            this.groupBoxBookList.Controls.Add(this.txtBookTitle);
            this.groupBoxBookList.Controls.Add(this.txtStock);
            this.groupBoxBookList.Controls.Add(this.txtISBN);
            this.groupBoxBookList.Controls.Add(this.txtPublisher);
            this.groupBoxBookList.Controls.Add(this.txtAuthor);
            this.groupBoxBookList.Controls.Add(this.txtBookID);
            this.groupBoxBookList.Controls.Add(this.dataGridBook);
            this.groupBoxBookList.Location = new System.Drawing.Point(12, 98);
            this.groupBoxBookList.Name = "groupBoxBookList";
            this.groupBoxBookList.Size = new System.Drawing.Size(760, 314);
            this.groupBoxBookList.TabIndex = 6;
            this.groupBoxBookList.TabStop = false;
            this.groupBoxBookList.Text = "Book List";
            // 
            // valueStock
            // 
            this.valueStock.AutoSize = true;
            this.valueStock.Location = new System.Drawing.Point(360, 260);
            this.valueStock.Name = "valueStock";
            this.valueStock.Size = new System.Drawing.Size(61, 13);
            this.valueStock.TabIndex = 29;
            this.valueStock.Text = "valueStock";
            // 
            // valueISBN
            // 
            this.valueISBN.AutoSize = true;
            this.valueISBN.Location = new System.Drawing.Point(360, 234);
            this.valueISBN.Name = "valueISBN";
            this.valueISBN.Size = new System.Drawing.Size(58, 13);
            this.valueISBN.TabIndex = 29;
            this.valueISBN.Text = "valueISBN";
            // 
            // valuePublisher
            // 
            this.valuePublisher.AutoSize = true;
            this.valuePublisher.Location = new System.Drawing.Point(360, 208);
            this.valuePublisher.Name = "valuePublisher";
            this.valuePublisher.Size = new System.Drawing.Size(76, 13);
            this.valuePublisher.TabIndex = 32;
            this.valuePublisher.Text = "valuePublisher";
            // 
            // valueAuthor
            // 
            this.valueAuthor.AutoSize = true;
            this.valueAuthor.Location = new System.Drawing.Point(360, 183);
            this.valueAuthor.Name = "valueAuthor";
            this.valueAuthor.Size = new System.Drawing.Size(64, 13);
            this.valueAuthor.TabIndex = 31;
            this.valueAuthor.Text = "valueAuthor";
            // 
            // valueTotalPage
            // 
            this.valueTotalPage.AutoSize = true;
            this.valueTotalPage.Location = new System.Drawing.Point(118, 286);
            this.valueTotalPage.Name = "valueTotalPage";
            this.valueTotalPage.Size = new System.Drawing.Size(82, 13);
            this.valueTotalPage.TabIndex = 23;
            this.valueTotalPage.Text = "valueTotalPage";
            // 
            // valuePrice
            // 
            this.valuePrice.AutoSize = true;
            this.valuePrice.Location = new System.Drawing.Point(118, 260);
            this.valuePrice.Name = "valuePrice";
            this.valuePrice.Size = new System.Drawing.Size(57, 13);
            this.valuePrice.TabIndex = 25;
            this.valuePrice.Text = "valuePrice";
            // 
            // valueBookTypeID
            // 
            this.valueBookTypeID.AutoSize = true;
            this.valueBookTypeID.Location = new System.Drawing.Point(118, 234);
            this.valueBookTypeID.Name = "valueBookTypeID";
            this.valueBookTypeID.Size = new System.Drawing.Size(93, 13);
            this.valueBookTypeID.TabIndex = 24;
            this.valueBookTypeID.Text = "valueBookTypeID";
            // 
            // valueBookTitle
            // 
            this.valueBookTitle.AutoSize = true;
            this.valueBookTitle.Location = new System.Drawing.Point(118, 208);
            this.valueBookTitle.Name = "valueBookTitle";
            this.valueBookTitle.Size = new System.Drawing.Size(78, 13);
            this.valueBookTitle.TabIndex = 27;
            this.valueBookTitle.Text = "valueBookTitle";
            // 
            // valueBookID
            // 
            this.valueBookID.AutoSize = true;
            this.valueBookID.Location = new System.Drawing.Point(118, 183);
            this.valueBookID.Name = "valueBookID";
            this.valueBookID.Size = new System.Drawing.Size(69, 13);
            this.valueBookID.TabIndex = 26;
            this.valueBookID.Text = "valueBookID";
            // 
            // boxQty
            // 
            this.boxQty.Location = new System.Drawing.Point(664, 181);
            this.boxQty.Maximum = new decimal(new int[] {
            20,
            0,
            0,
            0});
            this.boxQty.Name = "boxQty";
            this.boxQty.ReadOnly = true;
            this.boxQty.Size = new System.Drawing.Size(75, 20);
            this.boxQty.TabIndex = 22;
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(604, 183);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(23, 13);
            this.label4.TabIndex = 21;
            this.label4.Text = "Qty";
            // 
            // butAdd
            // 
            this.butAdd.Location = new System.Drawing.Point(607, 224);
            this.butAdd.Name = "butAdd";
            this.butAdd.Size = new System.Drawing.Size(132, 23);
            this.butAdd.TabIndex = 20;
            this.butAdd.Text = "Add to Cart";
            this.butAdd.UseVisualStyleBackColor = true;
            this.butAdd.Click += new System.EventHandler(this.butAdd_Click);
            // 
            // txtTotalPage
            // 
            this.txtTotalPage.AutoSize = true;
            this.txtTotalPage.Location = new System.Drawing.Point(17, 286);
            this.txtTotalPage.Name = "txtTotalPage";
            this.txtTotalPage.Size = new System.Drawing.Size(59, 13);
            this.txtTotalPage.TabIndex = 17;
            this.txtTotalPage.Text = "Total Page";
            // 
            // txtPrice
            // 
            this.txtPrice.AutoSize = true;
            this.txtPrice.Location = new System.Drawing.Point(17, 260);
            this.txtPrice.Name = "txtPrice";
            this.txtPrice.Size = new System.Drawing.Size(74, 13);
            this.txtPrice.TabIndex = 16;
            this.txtPrice.Text = "Price (Rupiah)";
            // 
            // txtBookTypeID
            // 
            this.txtBookTypeID.AutoSize = true;
            this.txtBookTypeID.Location = new System.Drawing.Point(17, 234);
            this.txtBookTypeID.Name = "txtBookTypeID";
            this.txtBookTypeID.Size = new System.Drawing.Size(73, 13);
            this.txtBookTypeID.TabIndex = 19;
            this.txtBookTypeID.Text = "Book Type ID";
            // 
            // txtBookTitle
            // 
            this.txtBookTitle.AutoSize = true;
            this.txtBookTitle.Location = new System.Drawing.Point(17, 208);
            this.txtBookTitle.Name = "txtBookTitle";
            this.txtBookTitle.Size = new System.Drawing.Size(55, 13);
            this.txtBookTitle.TabIndex = 18;
            this.txtBookTitle.Text = "Book Title";
            // 
            // txtStock
            // 
            this.txtStock.AutoSize = true;
            this.txtStock.Location = new System.Drawing.Point(287, 262);
            this.txtStock.Name = "txtStock";
            this.txtStock.Size = new System.Drawing.Size(35, 13);
            this.txtStock.TabIndex = 15;
            this.txtStock.Text = "Stock";
            // 
            // txtISBN
            // 
            this.txtISBN.AutoSize = true;
            this.txtISBN.Location = new System.Drawing.Point(287, 235);
            this.txtISBN.Name = "txtISBN";
            this.txtISBN.Size = new System.Drawing.Size(32, 13);
            this.txtISBN.TabIndex = 12;
            this.txtISBN.Text = "ISBN";
            // 
            // txtPublisher
            // 
            this.txtPublisher.AutoSize = true;
            this.txtPublisher.Location = new System.Drawing.Point(287, 208);
            this.txtPublisher.Name = "txtPublisher";
            this.txtPublisher.Size = new System.Drawing.Size(50, 13);
            this.txtPublisher.TabIndex = 11;
            this.txtPublisher.Text = "Publisher";
            // 
            // txtAuthor
            // 
            this.txtAuthor.AutoSize = true;
            this.txtAuthor.Location = new System.Drawing.Point(287, 183);
            this.txtAuthor.Name = "txtAuthor";
            this.txtAuthor.Size = new System.Drawing.Size(38, 13);
            this.txtAuthor.TabIndex = 14;
            this.txtAuthor.Text = "Author";
            // 
            // txtBookID
            // 
            this.txtBookID.AutoSize = true;
            this.txtBookID.Location = new System.Drawing.Point(17, 183);
            this.txtBookID.Name = "txtBookID";
            this.txtBookID.Size = new System.Drawing.Size(46, 13);
            this.txtBookID.TabIndex = 13;
            this.txtBookID.Text = "Book ID";
            // 
            // dataGridBook
            // 
            this.dataGridBook.AllowUserToAddRows = false;
            this.dataGridBook.AllowUserToDeleteRows = false;
            this.dataGridBook.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridBook.Location = new System.Drawing.Point(6, 19);
            this.dataGridBook.Name = "dataGridBook";
            this.dataGridBook.ReadOnly = true;
            this.dataGridBook.Size = new System.Drawing.Size(748, 150);
            this.dataGridBook.TabIndex = 0;
            this.dataGridBook.CellClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridBook_CellClick);
            // 
            // groupBoxCart
            // 
            this.groupBoxCart.Controls.Add(this.butRemove);
            this.groupBoxCart.Controls.Add(this.dataGridCart);
            this.groupBoxCart.Location = new System.Drawing.Point(12, 418);
            this.groupBoxCart.Name = "groupBoxCart";
            this.groupBoxCart.Size = new System.Drawing.Size(407, 181);
            this.groupBoxCart.TabIndex = 7;
            this.groupBoxCart.TabStop = false;
            this.groupBoxCart.Text = "Cart";
            // 
            // butRemove
            // 
            this.butRemove.Location = new System.Drawing.Point(121, 149);
            this.butRemove.Name = "butRemove";
            this.butRemove.Size = new System.Drawing.Size(153, 23);
            this.butRemove.TabIndex = 1;
            this.butRemove.Text = "Remove from Cart";
            this.butRemove.UseVisualStyleBackColor = true;
            this.butRemove.Click += new System.EventHandler(this.butRemove_Click);
            // 
            // dataGridCart
            // 
            this.dataGridCart.AllowUserToAddRows = false;
            this.dataGridCart.AllowUserToDeleteRows = false;
            this.dataGridCart.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridCart.Location = new System.Drawing.Point(6, 19);
            this.dataGridCart.Name = "dataGridCart";
            this.dataGridCart.ReadOnly = true;
            this.dataGridCart.Size = new System.Drawing.Size(395, 124);
            this.dataGridCart.TabIndex = 0;
            // 
            // groupBoxCustomerInformation
            // 
            this.groupBoxCustomerInformation.Controls.Add(this.boxPaymentType);
            this.groupBoxCustomerInformation.Controls.Add(this.boxCustomerName);
            this.groupBoxCustomerInformation.Controls.Add(this.txtPaymentType);
            this.groupBoxCustomerInformation.Controls.Add(this.txtCustomerName);
            this.groupBoxCustomerInformation.Location = new System.Drawing.Point(425, 418);
            this.groupBoxCustomerInformation.Name = "groupBoxCustomerInformation";
            this.groupBoxCustomerInformation.Size = new System.Drawing.Size(347, 100);
            this.groupBoxCustomerInformation.TabIndex = 8;
            this.groupBoxCustomerInformation.TabStop = false;
            this.groupBoxCustomerInformation.Text = "Customer Information";
            // 
            // boxPaymentType
            // 
            this.boxPaymentType.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.boxPaymentType.FormattingEnabled = true;
            this.boxPaymentType.Location = new System.Drawing.Point(139, 60);
            this.boxPaymentType.Name = "boxPaymentType";
            this.boxPaymentType.Size = new System.Drawing.Size(187, 21);
            this.boxPaymentType.TabIndex = 5;
            // 
            // boxCustomerName
            // 
            this.boxCustomerName.Location = new System.Drawing.Point(139, 25);
            this.boxCustomerName.Name = "boxCustomerName";
            this.boxCustomerName.Size = new System.Drawing.Size(187, 20);
            this.boxCustomerName.TabIndex = 4;
            // 
            // txtPaymentType
            // 
            this.txtPaymentType.AutoSize = true;
            this.txtPaymentType.Location = new System.Drawing.Point(27, 63);
            this.txtPaymentType.Name = "txtPaymentType";
            this.txtPaymentType.Size = new System.Drawing.Size(93, 13);
            this.txtPaymentType.TabIndex = 3;
            this.txtPaymentType.Text = "Payment Type     :";
            // 
            // txtCustomerName
            // 
            this.txtCustomerName.AutoSize = true;
            this.txtCustomerName.Location = new System.Drawing.Point(27, 28);
            this.txtCustomerName.Name = "txtCustomerName";
            this.txtCustomerName.Size = new System.Drawing.Size(94, 13);
            this.txtCustomerName.TabIndex = 2;
            this.txtCustomerName.Text = "Customer Name   :";
            // 
            // txtTotalTransaction
            // 
            this.txtTotalTransaction.AutoSize = true;
            this.txtTotalTransaction.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtTotalTransaction.Location = new System.Drawing.Point(425, 536);
            this.txtTotalTransaction.Name = "txtTotalTransaction";
            this.txtTotalTransaction.Size = new System.Drawing.Size(183, 24);
            this.txtTotalTransaction.TabIndex = 9;
            this.txtTotalTransaction.Text = "Total Transaction :";
            // 
            // butSubmit
            // 
            this.butSubmit.Location = new System.Drawing.Point(564, 567);
            this.butSubmit.Name = "butSubmit";
            this.butSubmit.Size = new System.Drawing.Size(75, 23);
            this.butSubmit.TabIndex = 10;
            this.butSubmit.Text = "Submit";
            this.butSubmit.UseVisualStyleBackColor = true;
            this.butSubmit.Click += new System.EventHandler(this.butSubmit_Click);
            // 
            // valueTotal
            // 
            this.valueTotal.AutoSize = true;
            this.valueTotal.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.valueTotal.Location = new System.Drawing.Point(645, 536);
            this.valueTotal.Name = "valueTotal";
            this.valueTotal.Size = new System.Drawing.Size(106, 24);
            this.valueTotal.TabIndex = 9;
            this.valueTotal.Text = "valueTotal";
            // 
            // txtRp
            // 
            this.txtRp.AutoSize = true;
            this.txtRp.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtRp.Location = new System.Drawing.Point(603, 536);
            this.txtRp.Name = "txtRp";
            this.txtRp.Size = new System.Drawing.Size(36, 24);
            this.txtRp.TabIndex = 9;
            this.txtRp.Text = "Rp";
            // 
            // txtTransactionID
            // 
            this.txtTransactionID.AutoSize = true;
            this.txtTransactionID.Location = new System.Drawing.Point(15, 61);
            this.txtTransactionID.Name = "txtTransactionID";
            this.txtTransactionID.Size = new System.Drawing.Size(77, 13);
            this.txtTransactionID.TabIndex = 11;
            this.txtTransactionID.Text = "Transaction ID";
            // 
            // valueTransactionID
            // 
            this.valueTransactionID.AutoSize = true;
            this.valueTransactionID.Location = new System.Drawing.Point(98, 61);
            this.valueTransactionID.Name = "valueTransactionID";
            this.valueTransactionID.Size = new System.Drawing.Size(100, 13);
            this.valueTransactionID.TabIndex = 12;
            this.valueTransactionID.Text = "valueTransactionID";
            // 
            // txtEmployeeID
            // 
            this.txtEmployeeID.AutoSize = true;
            this.txtEmployeeID.Location = new System.Drawing.Point(299, 61);
            this.txtEmployeeID.Name = "txtEmployeeID";
            this.txtEmployeeID.Size = new System.Drawing.Size(67, 13);
            this.txtEmployeeID.TabIndex = 13;
            this.txtEmployeeID.Text = "Employee ID";
            // 
            // valueEmployeeID
            // 
            this.valueEmployeeID.AutoSize = true;
            this.valueEmployeeID.Location = new System.Drawing.Point(372, 61);
            this.valueEmployeeID.Name = "valueEmployeeID";
            this.valueEmployeeID.Size = new System.Drawing.Size(90, 13);
            this.valueEmployeeID.TabIndex = 14;
            this.valueEmployeeID.Text = "valueEmployeeID";
            // 
            // txtDateTime
            // 
            this.txtDateTime.AutoSize = true;
            this.txtDateTime.Location = new System.Drawing.Point(593, 61);
            this.txtDateTime.Name = "txtDateTime";
            this.txtDateTime.Size = new System.Drawing.Size(64, 13);
            this.txtDateTime.TabIndex = 15;
            this.txtDateTime.Text = "Date / Time";
            // 
            // valueDateTime
            // 
            this.valueDateTime.AutoSize = true;
            this.valueDateTime.Location = new System.Drawing.Point(663, 61);
            this.valueDateTime.Name = "valueDateTime";
            this.valueDateTime.Size = new System.Drawing.Size(79, 13);
            this.valueDateTime.TabIndex = 16;
            this.valueDateTime.Text = "valueDateTime";
            // 
            // BuyBookForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(784, 611);
            this.Controls.Add(this.valueDateTime);
            this.Controls.Add(this.txtDateTime);
            this.Controls.Add(this.valueEmployeeID);
            this.Controls.Add(this.txtEmployeeID);
            this.Controls.Add(this.valueTransactionID);
            this.Controls.Add(this.txtTransactionID);
            this.Controls.Add(this.butSubmit);
            this.Controls.Add(this.txtRp);
            this.Controls.Add(this.valueTotal);
            this.Controls.Add(this.txtTotalTransaction);
            this.Controls.Add(this.groupBoxCustomerInformation);
            this.Controls.Add(this.groupBoxCart);
            this.Controls.Add(this.groupBoxBookList);
            this.Controls.Add(this.txtBuyBook);
            this.Name = "BuyBookForm";
            this.Text = "BuyBookForm";
            this.Load += new System.EventHandler(this.BuyBookForm_Load);
            this.groupBoxBookList.ResumeLayout(false);
            this.groupBoxBookList.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.boxQty)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridBook)).EndInit();
            this.groupBoxCart.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.dataGridCart)).EndInit();
            this.groupBoxCustomerInformation.ResumeLayout(false);
            this.groupBoxCustomerInformation.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label txtBuyBook;
        private System.Windows.Forms.GroupBox groupBoxBookList;
        private System.Windows.Forms.DataGridView dataGridBook;
        private System.Windows.Forms.Label txtTotalPage;
        private System.Windows.Forms.Label txtPrice;
        private System.Windows.Forms.Label txtBookTypeID;
        private System.Windows.Forms.Label txtBookTitle;
        private System.Windows.Forms.Label txtStock;
        private System.Windows.Forms.Label txtISBN;
        private System.Windows.Forms.Label txtPublisher;
        private System.Windows.Forms.Label txtAuthor;
        private System.Windows.Forms.Label txtBookID;
        private System.Windows.Forms.GroupBox groupBoxCart;
        private System.Windows.Forms.Button butRemove;
        private System.Windows.Forms.DataGridView dataGridCart;
        private System.Windows.Forms.GroupBox groupBoxCustomerInformation;
        private System.Windows.Forms.Label txtTotalTransaction;
        private System.Windows.Forms.Button butSubmit;
        private System.Windows.Forms.Label valueTotal;
        private System.Windows.Forms.Label txtRp;
        private System.Windows.Forms.Label txtCustomerName;
        private System.Windows.Forms.NumericUpDown boxQty;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Button butAdd;
        private System.Windows.Forms.ComboBox boxPaymentType;
        private System.Windows.Forms.TextBox boxCustomerName;
        private System.Windows.Forms.Label txtPaymentType;
        private System.Windows.Forms.Label txtTransactionID;
        private System.Windows.Forms.Label valueTransactionID;
        private System.Windows.Forms.Label txtEmployeeID;
        private System.Windows.Forms.Label valueEmployeeID;
        private System.Windows.Forms.Label txtDateTime;
        private System.Windows.Forms.Label valueDateTime;
        private System.Windows.Forms.Label valueISBN;
        private System.Windows.Forms.Label valuePublisher;
        private System.Windows.Forms.Label valueAuthor;
        private System.Windows.Forms.Label valueTotalPage;
        private System.Windows.Forms.Label valuePrice;
        private System.Windows.Forms.Label valueBookTypeID;
        private System.Windows.Forms.Label valueBookTitle;
        private System.Windows.Forms.Label valueBookID;
        private System.Windows.Forms.Label valueStock;
    }
}