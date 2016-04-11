namespace WindowsFormsApplication1
{
    partial class ViewTransactionForm
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
            this.txtViewTransaction = new System.Windows.Forms.Label();
            this.txtMonth = new System.Windows.Forms.Label();
            this.txtYear = new System.Windows.Forms.Label();
            this.boxMonth = new System.Windows.Forms.ComboBox();
            this.boxYear = new System.Windows.Forms.ComboBox();
            this.butGenerateReport = new System.Windows.Forms.Button();
            this.groupBoxHeader = new System.Windows.Forms.GroupBox();
            this.valuePaymentType = new System.Windows.Forms.Label();
            this.valueTotalTransaction = new System.Windows.Forms.Label();
            this.valueDateTransaction = new System.Windows.Forms.Label();
            this.valueCustomerName = new System.Windows.Forms.Label();
            this.valueTransactionID = new System.Windows.Forms.Label();
            this.txtPaymentType = new System.Windows.Forms.Label();
            this.txtTotalTransaction = new System.Windows.Forms.Label();
            this.txtDateTransaction = new System.Windows.Forms.Label();
            this.txtCustomerName = new System.Windows.Forms.Label();
            this.txtTransactionID = new System.Windows.Forms.Label();
            this.dataGridHeaderTransaction = new System.Windows.Forms.DataGridView();
            this.groupBoxDetail = new System.Windows.Forms.GroupBox();
            this.valueBookTypeName = new System.Windows.Forms.Label();
            this.valueTotalPrice = new System.Windows.Forms.Label();
            this.valueQty = new System.Windows.Forms.Label();
            this.valueISBN = new System.Windows.Forms.Label();
            this.valuePublisher = new System.Windows.Forms.Label();
            this.valueAuthor = new System.Windows.Forms.Label();
            this.txtTotalPrice = new System.Windows.Forms.Label();
            this.txtQty = new System.Windows.Forms.Label();
            this.txtISBN = new System.Windows.Forms.Label();
            this.txtPublisher = new System.Windows.Forms.Label();
            this.txtAuthor = new System.Windows.Forms.Label();
            this.valueTotalPage = new System.Windows.Forms.Label();
            this.valuePrice = new System.Windows.Forms.Label();
            this.valueBookTypeID = new System.Windows.Forms.Label();
            this.valueBookTitle = new System.Windows.Forms.Label();
            this.valueBookID = new System.Windows.Forms.Label();
            this.txtTotalPage = new System.Windows.Forms.Label();
            this.txtPrice = new System.Windows.Forms.Label();
            this.txtBookTypeID = new System.Windows.Forms.Label();
            this.txtBookTitle = new System.Windows.Forms.Label();
            this.txtBookID = new System.Windows.Forms.Label();
            this.dataGridDetailTransaction = new System.Windows.Forms.DataGridView();
            this.groupBoxHeader.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridHeaderTransaction)).BeginInit();
            this.groupBoxDetail.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridDetailTransaction)).BeginInit();
            this.SuspendLayout();
            // 
            // txtViewTransaction
            // 
            this.txtViewTransaction.AutoSize = true;
            this.txtViewTransaction.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtViewTransaction.Location = new System.Drawing.Point(348, 19);
            this.txtViewTransaction.Name = "txtViewTransaction";
            this.txtViewTransaction.Size = new System.Drawing.Size(236, 25);
            this.txtViewTransaction.TabIndex = 4;
            this.txtViewTransaction.Text = "VIEW TRANSACTION";
            // 
            // txtMonth
            // 
            this.txtMonth.AutoSize = true;
            this.txtMonth.Location = new System.Drawing.Point(12, 69);
            this.txtMonth.Name = "txtMonth";
            this.txtMonth.Size = new System.Drawing.Size(43, 13);
            this.txtMonth.TabIndex = 5;
            this.txtMonth.Text = "Month :";
            // 
            // txtYear
            // 
            this.txtYear.AutoSize = true;
            this.txtYear.Location = new System.Drawing.Point(211, 69);
            this.txtYear.Name = "txtYear";
            this.txtYear.Size = new System.Drawing.Size(35, 13);
            this.txtYear.TabIndex = 5;
            this.txtYear.Text = "Year :";
            // 
            // boxMonth
            // 
            this.boxMonth.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.boxMonth.FormattingEnabled = true;
            this.boxMonth.Location = new System.Drawing.Point(61, 66);
            this.boxMonth.Name = "boxMonth";
            this.boxMonth.Size = new System.Drawing.Size(121, 21);
            this.boxMonth.TabIndex = 6;
            // 
            // boxYear
            // 
            this.boxYear.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.boxYear.FormattingEnabled = true;
            this.boxYear.Location = new System.Drawing.Point(252, 66);
            this.boxYear.Name = "boxYear";
            this.boxYear.Size = new System.Drawing.Size(121, 21);
            this.boxYear.TabIndex = 6;
            // 
            // butGenerateReport
            // 
            this.butGenerateReport.Location = new System.Drawing.Point(419, 66);
            this.butGenerateReport.Name = "butGenerateReport";
            this.butGenerateReport.Size = new System.Drawing.Size(112, 23);
            this.butGenerateReport.TabIndex = 7;
            this.butGenerateReport.Text = "Generate Report";
            this.butGenerateReport.UseVisualStyleBackColor = true;
            this.butGenerateReport.Click += new System.EventHandler(this.butGenerateReport_Click);
            // 
            // groupBoxHeader
            // 
            this.groupBoxHeader.Controls.Add(this.valuePaymentType);
            this.groupBoxHeader.Controls.Add(this.valueTotalTransaction);
            this.groupBoxHeader.Controls.Add(this.valueDateTransaction);
            this.groupBoxHeader.Controls.Add(this.valueCustomerName);
            this.groupBoxHeader.Controls.Add(this.valueTransactionID);
            this.groupBoxHeader.Controls.Add(this.txtPaymentType);
            this.groupBoxHeader.Controls.Add(this.txtTotalTransaction);
            this.groupBoxHeader.Controls.Add(this.txtDateTransaction);
            this.groupBoxHeader.Controls.Add(this.txtCustomerName);
            this.groupBoxHeader.Controls.Add(this.txtTransactionID);
            this.groupBoxHeader.Controls.Add(this.dataGridHeaderTransaction);
            this.groupBoxHeader.Location = new System.Drawing.Point(15, 102);
            this.groupBoxHeader.Name = "groupBoxHeader";
            this.groupBoxHeader.Size = new System.Drawing.Size(596, 426);
            this.groupBoxHeader.TabIndex = 8;
            this.groupBoxHeader.TabStop = false;
            this.groupBoxHeader.Text = "Header Transaction";
            // 
            // valuePaymentType
            // 
            this.valuePaymentType.AutoSize = true;
            this.valuePaymentType.Location = new System.Drawing.Point(118, 380);
            this.valuePaymentType.Name = "valuePaymentType";
            this.valuePaymentType.Size = new System.Drawing.Size(98, 13);
            this.valuePaymentType.TabIndex = 2;
            this.valuePaymentType.Text = "valuePaymentType";
            // 
            // valueTotalTransaction
            // 
            this.valueTotalTransaction.AutoSize = true;
            this.valueTotalTransaction.Location = new System.Drawing.Point(118, 336);
            this.valueTotalTransaction.Name = "valueTotalTransaction";
            this.valueTotalTransaction.Size = new System.Drawing.Size(113, 13);
            this.valueTotalTransaction.TabIndex = 2;
            this.valueTotalTransaction.Text = "valueTotalTransaction";
            // 
            // valueDateTransaction
            // 
            this.valueDateTransaction.AutoSize = true;
            this.valueDateTransaction.Location = new System.Drawing.Point(118, 292);
            this.valueDateTransaction.Name = "valueDateTransaction";
            this.valueDateTransaction.Size = new System.Drawing.Size(112, 13);
            this.valueDateTransaction.TabIndex = 2;
            this.valueDateTransaction.Text = "valueDateTransaction";
            // 
            // valueCustomerName
            // 
            this.valueCustomerName.AutoSize = true;
            this.valueCustomerName.Location = new System.Drawing.Point(118, 248);
            this.valueCustomerName.Name = "valueCustomerName";
            this.valueCustomerName.Size = new System.Drawing.Size(105, 13);
            this.valueCustomerName.TabIndex = 2;
            this.valueCustomerName.Text = "valueCustomerName";
            // 
            // valueTransactionID
            // 
            this.valueTransactionID.AutoSize = true;
            this.valueTransactionID.Location = new System.Drawing.Point(118, 204);
            this.valueTransactionID.Name = "valueTransactionID";
            this.valueTransactionID.Size = new System.Drawing.Size(100, 13);
            this.valueTransactionID.TabIndex = 2;
            this.valueTransactionID.Text = "valueTransactionID";
            // 
            // txtPaymentType
            // 
            this.txtPaymentType.AutoSize = true;
            this.txtPaymentType.Location = new System.Drawing.Point(18, 380);
            this.txtPaymentType.Name = "txtPaymentType";
            this.txtPaymentType.Size = new System.Drawing.Size(96, 13);
            this.txtPaymentType.TabIndex = 1;
            this.txtPaymentType.Text = "Payment Type      :";
            // 
            // txtTotalTransaction
            // 
            this.txtTotalTransaction.AutoSize = true;
            this.txtTotalTransaction.Location = new System.Drawing.Point(18, 336);
            this.txtTotalTransaction.Name = "txtTotalTransaction";
            this.txtTotalTransaction.Size = new System.Drawing.Size(96, 13);
            this.txtTotalTransaction.TabIndex = 1;
            this.txtTotalTransaction.Text = "Total Transaction :";
            // 
            // txtDateTransaction
            // 
            this.txtDateTransaction.AutoSize = true;
            this.txtDateTransaction.Location = new System.Drawing.Point(19, 292);
            this.txtDateTransaction.Name = "txtDateTransaction";
            this.txtDateTransaction.Size = new System.Drawing.Size(95, 13);
            this.txtDateTransaction.TabIndex = 1;
            this.txtDateTransaction.Text = "Date Transaction :";
            // 
            // txtCustomerName
            // 
            this.txtCustomerName.AutoSize = true;
            this.txtCustomerName.Location = new System.Drawing.Point(20, 248);
            this.txtCustomerName.Name = "txtCustomerName";
            this.txtCustomerName.Size = new System.Drawing.Size(94, 13);
            this.txtCustomerName.TabIndex = 1;
            this.txtCustomerName.Text = "Customer Name   :";
            // 
            // txtTransactionID
            // 
            this.txtTransactionID.AutoSize = true;
            this.txtTransactionID.Location = new System.Drawing.Point(19, 204);
            this.txtTransactionID.Name = "txtTransactionID";
            this.txtTransactionID.Size = new System.Drawing.Size(95, 13);
            this.txtTransactionID.TabIndex = 1;
            this.txtTransactionID.Text = "Transaction ID     :";
            // 
            // dataGridHeaderTransaction
            // 
            this.dataGridHeaderTransaction.AllowUserToAddRows = false;
            this.dataGridHeaderTransaction.AllowUserToDeleteRows = false;
            this.dataGridHeaderTransaction.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridHeaderTransaction.Location = new System.Drawing.Point(6, 19);
            this.dataGridHeaderTransaction.Name = "dataGridHeaderTransaction";
            this.dataGridHeaderTransaction.ReadOnly = true;
            this.dataGridHeaderTransaction.Size = new System.Drawing.Size(584, 171);
            this.dataGridHeaderTransaction.TabIndex = 0;
            this.dataGridHeaderTransaction.CellClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridHeaderTransaction_CellClick);
            // 
            // groupBoxDetail
            // 
            this.groupBoxDetail.Controls.Add(this.valueBookTypeName);
            this.groupBoxDetail.Controls.Add(this.valueTotalPrice);
            this.groupBoxDetail.Controls.Add(this.valueQty);
            this.groupBoxDetail.Controls.Add(this.valueISBN);
            this.groupBoxDetail.Controls.Add(this.valuePublisher);
            this.groupBoxDetail.Controls.Add(this.valueAuthor);
            this.groupBoxDetail.Controls.Add(this.txtTotalPrice);
            this.groupBoxDetail.Controls.Add(this.txtQty);
            this.groupBoxDetail.Controls.Add(this.txtISBN);
            this.groupBoxDetail.Controls.Add(this.txtPublisher);
            this.groupBoxDetail.Controls.Add(this.txtAuthor);
            this.groupBoxDetail.Controls.Add(this.valueTotalPage);
            this.groupBoxDetail.Controls.Add(this.valuePrice);
            this.groupBoxDetail.Controls.Add(this.valueBookTypeID);
            this.groupBoxDetail.Controls.Add(this.valueBookTitle);
            this.groupBoxDetail.Controls.Add(this.valueBookID);
            this.groupBoxDetail.Controls.Add(this.txtTotalPage);
            this.groupBoxDetail.Controls.Add(this.txtPrice);
            this.groupBoxDetail.Controls.Add(this.txtBookTypeID);
            this.groupBoxDetail.Controls.Add(this.txtBookTitle);
            this.groupBoxDetail.Controls.Add(this.txtBookID);
            this.groupBoxDetail.Controls.Add(this.dataGridDetailTransaction);
            this.groupBoxDetail.Location = new System.Drawing.Point(617, 102);
            this.groupBoxDetail.Name = "groupBoxDetail";
            this.groupBoxDetail.Size = new System.Drawing.Size(355, 426);
            this.groupBoxDetail.TabIndex = 9;
            this.groupBoxDetail.TabStop = false;
            this.groupBoxDetail.Text = "Detail Transaction";
            // 
            // valueBookTypeName
            // 
            this.valueBookTypeName.AutoSize = true;
            this.valueBookTypeName.ForeColor = System.Drawing.Color.SteelBlue;
            this.valueBookTypeName.Location = new System.Drawing.Point(224, 248);
            this.valueBookTypeName.Name = "valueBookTypeName";
            this.valueBookTypeName.Size = new System.Drawing.Size(110, 13);
            this.valueBookTypeName.TabIndex = 15;
            this.valueBookTypeName.Text = "valueBookTypeName";
            // 
            // valueTotalPrice
            // 
            this.valueTotalPrice.AutoSize = true;
            this.valueTotalPrice.Location = new System.Drawing.Point(124, 402);
            this.valueTotalPrice.Name = "valueTotalPrice";
            this.valueTotalPrice.Size = new System.Drawing.Size(81, 13);
            this.valueTotalPrice.TabIndex = 18;
            this.valueTotalPrice.Text = "valueTotalPrice";
            // 
            // valueQty
            // 
            this.valueQty.AutoSize = true;
            this.valueQty.Location = new System.Drawing.Point(124, 380);
            this.valueQty.Name = "valueQty";
            this.valueQty.Size = new System.Drawing.Size(49, 13);
            this.valueQty.TabIndex = 20;
            this.valueQty.Text = "valueQty";
            // 
            // valueISBN
            // 
            this.valueISBN.AutoSize = true;
            this.valueISBN.Location = new System.Drawing.Point(124, 358);
            this.valueISBN.Name = "valueISBN";
            this.valueISBN.Size = new System.Drawing.Size(58, 13);
            this.valueISBN.TabIndex = 19;
            this.valueISBN.Text = "valueISBN";
            // 
            // valuePublisher
            // 
            this.valuePublisher.AutoSize = true;
            this.valuePublisher.Location = new System.Drawing.Point(124, 336);
            this.valuePublisher.Name = "valuePublisher";
            this.valuePublisher.Size = new System.Drawing.Size(76, 13);
            this.valuePublisher.TabIndex = 22;
            this.valuePublisher.Text = "valuePublisher";
            // 
            // valueAuthor
            // 
            this.valueAuthor.AutoSize = true;
            this.valueAuthor.Location = new System.Drawing.Point(124, 314);
            this.valueAuthor.Name = "valueAuthor";
            this.valueAuthor.Size = new System.Drawing.Size(64, 13);
            this.valueAuthor.TabIndex = 21;
            this.valueAuthor.Text = "valueAuthor";
            // 
            // txtTotalPrice
            // 
            this.txtTotalPrice.AutoSize = true;
            this.txtTotalPrice.Location = new System.Drawing.Point(22, 402);
            this.txtTotalPrice.Name = "txtTotalPrice";
            this.txtTotalPrice.Size = new System.Drawing.Size(55, 13);
            this.txtTotalPrice.TabIndex = 15;
            this.txtTotalPrice.Text = "TotalPrice";
            // 
            // txtQty
            // 
            this.txtQty.AutoSize = true;
            this.txtQty.Location = new System.Drawing.Point(22, 380);
            this.txtQty.Name = "txtQty";
            this.txtQty.Size = new System.Drawing.Size(23, 13);
            this.txtQty.TabIndex = 14;
            this.txtQty.Text = "Qty";
            // 
            // txtISBN
            // 
            this.txtISBN.AutoSize = true;
            this.txtISBN.Location = new System.Drawing.Point(23, 358);
            this.txtISBN.Name = "txtISBN";
            this.txtISBN.Size = new System.Drawing.Size(32, 13);
            this.txtISBN.TabIndex = 13;
            this.txtISBN.Text = "ISBN";
            // 
            // txtPublisher
            // 
            this.txtPublisher.AutoSize = true;
            this.txtPublisher.Location = new System.Drawing.Point(24, 336);
            this.txtPublisher.Name = "txtPublisher";
            this.txtPublisher.Size = new System.Drawing.Size(50, 13);
            this.txtPublisher.TabIndex = 17;
            this.txtPublisher.Text = "Publisher";
            // 
            // txtAuthor
            // 
            this.txtAuthor.AutoSize = true;
            this.txtAuthor.Location = new System.Drawing.Point(23, 314);
            this.txtAuthor.Name = "txtAuthor";
            this.txtAuthor.Size = new System.Drawing.Size(38, 13);
            this.txtAuthor.TabIndex = 16;
            this.txtAuthor.Text = "Author";
            // 
            // valueTotalPage
            // 
            this.valueTotalPage.AutoSize = true;
            this.valueTotalPage.Location = new System.Drawing.Point(125, 292);
            this.valueTotalPage.Name = "valueTotalPage";
            this.valueTotalPage.Size = new System.Drawing.Size(82, 13);
            this.valueTotalPage.TabIndex = 8;
            this.valueTotalPage.Text = "valueTotalPage";
            // 
            // valuePrice
            // 
            this.valuePrice.AutoSize = true;
            this.valuePrice.Location = new System.Drawing.Point(125, 270);
            this.valuePrice.Name = "valuePrice";
            this.valuePrice.Size = new System.Drawing.Size(57, 13);
            this.valuePrice.TabIndex = 10;
            this.valuePrice.Text = "valuePrice";
            // 
            // valueBookTypeID
            // 
            this.valueBookTypeID.AutoSize = true;
            this.valueBookTypeID.Location = new System.Drawing.Point(125, 248);
            this.valueBookTypeID.Name = "valueBookTypeID";
            this.valueBookTypeID.Size = new System.Drawing.Size(93, 13);
            this.valueBookTypeID.TabIndex = 9;
            this.valueBookTypeID.Text = "valueBookTypeID";
            // 
            // valueBookTitle
            // 
            this.valueBookTitle.AutoSize = true;
            this.valueBookTitle.Location = new System.Drawing.Point(125, 226);
            this.valueBookTitle.Name = "valueBookTitle";
            this.valueBookTitle.Size = new System.Drawing.Size(78, 13);
            this.valueBookTitle.TabIndex = 12;
            this.valueBookTitle.Text = "valueBookTitle";
            // 
            // valueBookID
            // 
            this.valueBookID.AutoSize = true;
            this.valueBookID.Location = new System.Drawing.Point(125, 204);
            this.valueBookID.Name = "valueBookID";
            this.valueBookID.Size = new System.Drawing.Size(69, 13);
            this.valueBookID.TabIndex = 11;
            this.valueBookID.Text = "valueBookID";
            // 
            // txtTotalPage
            // 
            this.txtTotalPage.AutoSize = true;
            this.txtTotalPage.Location = new System.Drawing.Point(23, 292);
            this.txtTotalPage.Name = "txtTotalPage";
            this.txtTotalPage.Size = new System.Drawing.Size(59, 13);
            this.txtTotalPage.TabIndex = 5;
            this.txtTotalPage.Text = "Total Page";
            // 
            // txtPrice
            // 
            this.txtPrice.AutoSize = true;
            this.txtPrice.Location = new System.Drawing.Point(23, 270);
            this.txtPrice.Name = "txtPrice";
            this.txtPrice.Size = new System.Drawing.Size(31, 13);
            this.txtPrice.TabIndex = 4;
            this.txtPrice.Text = "Price";
            // 
            // txtBookTypeID
            // 
            this.txtBookTypeID.AutoSize = true;
            this.txtBookTypeID.Location = new System.Drawing.Point(24, 248);
            this.txtBookTypeID.Name = "txtBookTypeID";
            this.txtBookTypeID.Size = new System.Drawing.Size(73, 13);
            this.txtBookTypeID.TabIndex = 3;
            this.txtBookTypeID.Text = "Book Type ID";
            // 
            // txtBookTitle
            // 
            this.txtBookTitle.AutoSize = true;
            this.txtBookTitle.Location = new System.Drawing.Point(24, 226);
            this.txtBookTitle.Name = "txtBookTitle";
            this.txtBookTitle.Size = new System.Drawing.Size(55, 13);
            this.txtBookTitle.TabIndex = 7;
            this.txtBookTitle.Text = "Book Title";
            // 
            // txtBookID
            // 
            this.txtBookID.AutoSize = true;
            this.txtBookID.Location = new System.Drawing.Point(24, 204);
            this.txtBookID.Name = "txtBookID";
            this.txtBookID.Size = new System.Drawing.Size(46, 13);
            this.txtBookID.TabIndex = 6;
            this.txtBookID.Text = "Book ID";
            // 
            // dataGridDetailTransaction
            // 
            this.dataGridDetailTransaction.AllowUserToAddRows = false;
            this.dataGridDetailTransaction.AllowUserToDeleteRows = false;
            this.dataGridDetailTransaction.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridDetailTransaction.Location = new System.Drawing.Point(0, 19);
            this.dataGridDetailTransaction.Name = "dataGridDetailTransaction";
            this.dataGridDetailTransaction.ReadOnly = true;
            this.dataGridDetailTransaction.Size = new System.Drawing.Size(349, 171);
            this.dataGridDetailTransaction.TabIndex = 0;
            this.dataGridDetailTransaction.CellClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridDetailTransaction_CellClick);
            // 
            // ViewTransactionForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(984, 540);
            this.Controls.Add(this.groupBoxDetail);
            this.Controls.Add(this.groupBoxHeader);
            this.Controls.Add(this.butGenerateReport);
            this.Controls.Add(this.boxYear);
            this.Controls.Add(this.boxMonth);
            this.Controls.Add(this.txtYear);
            this.Controls.Add(this.txtMonth);
            this.Controls.Add(this.txtViewTransaction);
            this.Name = "ViewTransactionForm";
            this.Text = "ViewTransactionForm";
            this.Load += new System.EventHandler(this.ViewTransactionForm_Load);
            this.groupBoxHeader.ResumeLayout(false);
            this.groupBoxHeader.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridHeaderTransaction)).EndInit();
            this.groupBoxDetail.ResumeLayout(false);
            this.groupBoxDetail.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridDetailTransaction)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label txtViewTransaction;
        private System.Windows.Forms.Label txtMonth;
        private System.Windows.Forms.Label txtYear;
        private System.Windows.Forms.ComboBox boxMonth;
        private System.Windows.Forms.ComboBox boxYear;
        private System.Windows.Forms.Button butGenerateReport;
        private System.Windows.Forms.GroupBox groupBoxHeader;
        private System.Windows.Forms.DataGridView dataGridHeaderTransaction;
        private System.Windows.Forms.Label valuePaymentType;
        private System.Windows.Forms.Label valueTotalTransaction;
        private System.Windows.Forms.Label valueDateTransaction;
        private System.Windows.Forms.Label valueCustomerName;
        private System.Windows.Forms.Label valueTransactionID;
        private System.Windows.Forms.Label txtPaymentType;
        private System.Windows.Forms.Label txtTotalTransaction;
        private System.Windows.Forms.Label txtDateTransaction;
        private System.Windows.Forms.Label txtCustomerName;
        private System.Windows.Forms.Label txtTransactionID;
        private System.Windows.Forms.GroupBox groupBoxDetail;
        private System.Windows.Forms.Label valueTotalPrice;
        private System.Windows.Forms.Label valueQty;
        private System.Windows.Forms.Label valueISBN;
        private System.Windows.Forms.Label valuePublisher;
        private System.Windows.Forms.Label valueAuthor;
        private System.Windows.Forms.Label txtTotalPrice;
        private System.Windows.Forms.Label txtQty;
        private System.Windows.Forms.Label txtISBN;
        private System.Windows.Forms.Label txtPublisher;
        private System.Windows.Forms.Label txtAuthor;
        private System.Windows.Forms.Label valueTotalPage;
        private System.Windows.Forms.Label valuePrice;
        private System.Windows.Forms.Label valueBookTypeID;
        private System.Windows.Forms.Label valueBookTitle;
        private System.Windows.Forms.Label valueBookID;
        private System.Windows.Forms.Label txtTotalPage;
        private System.Windows.Forms.Label txtPrice;
        private System.Windows.Forms.Label txtBookTypeID;
        private System.Windows.Forms.Label txtBookTitle;
        private System.Windows.Forms.Label txtBookID;
        private System.Windows.Forms.DataGridView dataGridDetailTransaction;
        private System.Windows.Forms.Label valueBookTypeName;
    }
}