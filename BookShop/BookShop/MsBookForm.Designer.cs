namespace WindowsFormsApplication1
{
    partial class MsBookForm
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
            this.txtMasterBook = new System.Windows.Forms.Label();
            this.dataGridBook = new System.Windows.Forms.DataGridView();
            this.butCancel = new System.Windows.Forms.Button();
            this.butSave = new System.Windows.Forms.Button();
            this.butDelete = new System.Windows.Forms.Button();
            this.butUpdate = new System.Windows.Forms.Button();
            this.butInsert = new System.Windows.Forms.Button();
            this.txtBookID = new System.Windows.Forms.Label();
            this.txtBookTitle = new System.Windows.Forms.Label();
            this.txtBookTypeID = new System.Windows.Forms.Label();
            this.txtPrice = new System.Windows.Forms.Label();
            this.txtTotalPage = new System.Windows.Forms.Label();
            this.txtAuthor = new System.Windows.Forms.Label();
            this.txtPublisher = new System.Windows.Forms.Label();
            this.txtISBN = new System.Windows.Forms.Label();
            this.txtStock = new System.Windows.Forms.Label();
            this.boxBookTitle = new System.Windows.Forms.TextBox();
            this.boxAuthor = new System.Windows.Forms.TextBox();
            this.boxPrice = new System.Windows.Forms.TextBox();
            this.boxBookID = new System.Windows.Forms.TextBox();
            this.boxPublisher = new System.Windows.Forms.TextBox();
            this.boxISBN = new System.Windows.Forms.TextBox();
            this.boxTotalPage = new System.Windows.Forms.NumericUpDown();
            this.boxStock = new System.Windows.Forms.NumericUpDown();
            this.boxBookTypeID = new System.Windows.Forms.ComboBox();
            this.valueBookTypeName = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridBook)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.boxTotalPage)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.boxStock)).BeginInit();
            this.SuspendLayout();
            // 
            // txtMasterBook
            // 
            this.txtMasterBook.AutoSize = true;
            this.txtMasterBook.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtMasterBook.Location = new System.Drawing.Point(326, 18);
            this.txtMasterBook.Name = "txtMasterBook";
            this.txtMasterBook.Size = new System.Drawing.Size(177, 25);
            this.txtMasterBook.TabIndex = 3;
            this.txtMasterBook.Text = "MASTER BOOK\r\n";
            // 
            // dataGridBook
            // 
            this.dataGridBook.AllowUserToAddRows = false;
            this.dataGridBook.AllowUserToDeleteRows = false;
            this.dataGridBook.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridBook.Location = new System.Drawing.Point(12, 62);
            this.dataGridBook.Name = "dataGridBook";
            this.dataGridBook.ReadOnly = true;
            this.dataGridBook.Size = new System.Drawing.Size(810, 168);
            this.dataGridBook.TabIndex = 4;
            // 
            // butCancel
            // 
            this.butCancel.Location = new System.Drawing.Point(558, 381);
            this.butCancel.Name = "butCancel";
            this.butCancel.Size = new System.Drawing.Size(75, 23);
            this.butCancel.TabIndex = 8;
            this.butCancel.Text = "Cancel";
            this.butCancel.UseVisualStyleBackColor = true;
            this.butCancel.Click += new System.EventHandler(this.butCancel_Click);
            // 
            // butSave
            // 
            this.butSave.Location = new System.Drawing.Point(477, 381);
            this.butSave.Name = "butSave";
            this.butSave.Size = new System.Drawing.Size(75, 23);
            this.butSave.TabIndex = 9;
            this.butSave.Text = "Save";
            this.butSave.UseVisualStyleBackColor = true;
            this.butSave.Click += new System.EventHandler(this.butSave_Click);
            // 
            // butDelete
            // 
            this.butDelete.Location = new System.Drawing.Point(396, 381);
            this.butDelete.Name = "butDelete";
            this.butDelete.Size = new System.Drawing.Size(75, 23);
            this.butDelete.TabIndex = 7;
            this.butDelete.Text = "Delete";
            this.butDelete.UseVisualStyleBackColor = true;
            this.butDelete.Click += new System.EventHandler(this.butDelete_Click);
            // 
            // butUpdate
            // 
            this.butUpdate.Location = new System.Drawing.Point(315, 381);
            this.butUpdate.Name = "butUpdate";
            this.butUpdate.Size = new System.Drawing.Size(75, 23);
            this.butUpdate.TabIndex = 5;
            this.butUpdate.Text = "Update";
            this.butUpdate.UseVisualStyleBackColor = true;
            this.butUpdate.Click += new System.EventHandler(this.butUpdate_Click);
            // 
            // butInsert
            // 
            this.butInsert.Location = new System.Drawing.Point(234, 381);
            this.butInsert.Name = "butInsert";
            this.butInsert.Size = new System.Drawing.Size(75, 23);
            this.butInsert.TabIndex = 6;
            this.butInsert.Text = "Insert";
            this.butInsert.UseVisualStyleBackColor = true;
            this.butInsert.Click += new System.EventHandler(this.butInsert_Click);
            // 
            // txtBookID
            // 
            this.txtBookID.AutoSize = true;
            this.txtBookID.Location = new System.Drawing.Point(24, 243);
            this.txtBookID.Name = "txtBookID";
            this.txtBookID.Size = new System.Drawing.Size(46, 13);
            this.txtBookID.TabIndex = 10;
            this.txtBookID.Text = "Book ID";
            // 
            // txtBookTitle
            // 
            this.txtBookTitle.AutoSize = true;
            this.txtBookTitle.Location = new System.Drawing.Point(24, 268);
            this.txtBookTitle.Name = "txtBookTitle";
            this.txtBookTitle.Size = new System.Drawing.Size(55, 13);
            this.txtBookTitle.TabIndex = 10;
            this.txtBookTitle.Text = "Book Title";
            // 
            // txtBookTypeID
            // 
            this.txtBookTypeID.AutoSize = true;
            this.txtBookTypeID.Location = new System.Drawing.Point(24, 294);
            this.txtBookTypeID.Name = "txtBookTypeID";
            this.txtBookTypeID.Size = new System.Drawing.Size(73, 13);
            this.txtBookTypeID.TabIndex = 10;
            this.txtBookTypeID.Text = "Book Type ID";
            // 
            // txtPrice
            // 
            this.txtPrice.AutoSize = true;
            this.txtPrice.Location = new System.Drawing.Point(24, 320);
            this.txtPrice.Name = "txtPrice";
            this.txtPrice.Size = new System.Drawing.Size(74, 13);
            this.txtPrice.TabIndex = 10;
            this.txtPrice.Text = "Price (Rupiah)";
            // 
            // txtTotalPage
            // 
            this.txtTotalPage.AutoSize = true;
            this.txtTotalPage.Location = new System.Drawing.Point(24, 346);
            this.txtTotalPage.Name = "txtTotalPage";
            this.txtTotalPage.Size = new System.Drawing.Size(59, 13);
            this.txtTotalPage.TabIndex = 10;
            this.txtTotalPage.Text = "Total Page";
            // 
            // txtAuthor
            // 
            this.txtAuthor.AutoSize = true;
            this.txtAuthor.Location = new System.Drawing.Point(538, 240);
            this.txtAuthor.Name = "txtAuthor";
            this.txtAuthor.Size = new System.Drawing.Size(38, 13);
            this.txtAuthor.TabIndex = 10;
            this.txtAuthor.Text = "Author";
            // 
            // txtPublisher
            // 
            this.txtPublisher.AutoSize = true;
            this.txtPublisher.Location = new System.Drawing.Point(538, 265);
            this.txtPublisher.Name = "txtPublisher";
            this.txtPublisher.Size = new System.Drawing.Size(50, 13);
            this.txtPublisher.TabIndex = 10;
            this.txtPublisher.Text = "Publisher";
            // 
            // txtISBN
            // 
            this.txtISBN.AutoSize = true;
            this.txtISBN.Location = new System.Drawing.Point(538, 292);
            this.txtISBN.Name = "txtISBN";
            this.txtISBN.Size = new System.Drawing.Size(32, 13);
            this.txtISBN.TabIndex = 10;
            this.txtISBN.Text = "ISBN";
            // 
            // txtStock
            // 
            this.txtStock.AutoSize = true;
            this.txtStock.Location = new System.Drawing.Point(538, 319);
            this.txtStock.Name = "txtStock";
            this.txtStock.Size = new System.Drawing.Size(35, 13);
            this.txtStock.TabIndex = 10;
            this.txtStock.Text = "Stock";
            // 
            // boxBookTitle
            // 
            this.boxBookTitle.Location = new System.Drawing.Point(122, 265);
            this.boxBookTitle.Name = "boxBookTitle";
            this.boxBookTitle.Size = new System.Drawing.Size(185, 20);
            this.boxBookTitle.TabIndex = 11;
            // 
            // boxAuthor
            // 
            this.boxAuthor.Location = new System.Drawing.Point(621, 237);
            this.boxAuthor.Name = "boxAuthor";
            this.boxAuthor.Size = new System.Drawing.Size(185, 20);
            this.boxAuthor.TabIndex = 11;
            // 
            // boxPrice
            // 
            this.boxPrice.Location = new System.Drawing.Point(122, 318);
            this.boxPrice.Name = "boxPrice";
            this.boxPrice.Size = new System.Drawing.Size(185, 20);
            this.boxPrice.TabIndex = 11;
            // 
            // boxBookID
            // 
            this.boxBookID.Location = new System.Drawing.Point(122, 240);
            this.boxBookID.Name = "boxBookID";
            this.boxBookID.Size = new System.Drawing.Size(185, 20);
            this.boxBookID.TabIndex = 11;
            // 
            // boxPublisher
            // 
            this.boxPublisher.Location = new System.Drawing.Point(621, 263);
            this.boxPublisher.Name = "boxPublisher";
            this.boxPublisher.Size = new System.Drawing.Size(185, 20);
            this.boxPublisher.TabIndex = 11;
            // 
            // boxISBN
            // 
            this.boxISBN.Location = new System.Drawing.Point(621, 289);
            this.boxISBN.Name = "boxISBN";
            this.boxISBN.Size = new System.Drawing.Size(185, 20);
            this.boxISBN.TabIndex = 11;
            // 
            // boxTotalPage
            // 
            this.boxTotalPage.Location = new System.Drawing.Point(122, 344);
            this.boxTotalPage.Maximum = new decimal(new int[] {
            500,
            0,
            0,
            0});
            this.boxTotalPage.Minimum = new decimal(new int[] {
            1,
            0,
            0,
            0});
            this.boxTotalPage.Name = "boxTotalPage";
            this.boxTotalPage.ReadOnly = true;
            this.boxTotalPage.Size = new System.Drawing.Size(185, 20);
            this.boxTotalPage.TabIndex = 12;
            this.boxTotalPage.Value = new decimal(new int[] {
            1,
            0,
            0,
            0});
            // 
            // boxStock
            // 
            this.boxStock.Location = new System.Drawing.Point(621, 317);
            this.boxStock.Maximum = new decimal(new int[] {
            50,
            0,
            0,
            0});
            this.boxStock.Name = "boxStock";
            this.boxStock.ReadOnly = true;
            this.boxStock.Size = new System.Drawing.Size(185, 20);
            this.boxStock.TabIndex = 12;
            // 
            // boxBookTypeID
            // 
            this.boxBookTypeID.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.boxBookTypeID.FormattingEnabled = true;
            this.boxBookTypeID.Location = new System.Drawing.Point(122, 291);
            this.boxBookTypeID.Name = "boxBookTypeID";
            this.boxBookTypeID.Size = new System.Drawing.Size(185, 21);
            this.boxBookTypeID.TabIndex = 13;
            this.boxBookTypeID.SelectedIndexChanged += new System.EventHandler(this.boxBookTypeID_SelectedIndexChanged);
            // 
            // valueBookTypeName
            // 
            this.valueBookTypeName.AutoSize = true;
            this.valueBookTypeName.ForeColor = System.Drawing.Color.SteelBlue;
            this.valueBookTypeName.Location = new System.Drawing.Point(313, 294);
            this.valueBookTypeName.Name = "valueBookTypeName";
            this.valueBookTypeName.Size = new System.Drawing.Size(110, 13);
            this.valueBookTypeName.TabIndex = 14;
            this.valueBookTypeName.Text = "valueBookTypeName";
            // 
            // MsBookForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(834, 416);
            this.Controls.Add(this.valueBookTypeName);
            this.Controls.Add(this.boxBookTypeID);
            this.Controls.Add(this.boxStock);
            this.Controls.Add(this.boxTotalPage);
            this.Controls.Add(this.boxAuthor);
            this.Controls.Add(this.boxISBN);
            this.Controls.Add(this.boxPublisher);
            this.Controls.Add(this.boxBookID);
            this.Controls.Add(this.boxPrice);
            this.Controls.Add(this.boxBookTitle);
            this.Controls.Add(this.txtTotalPage);
            this.Controls.Add(this.txtPrice);
            this.Controls.Add(this.txtBookTypeID);
            this.Controls.Add(this.txtBookTitle);
            this.Controls.Add(this.txtStock);
            this.Controls.Add(this.txtISBN);
            this.Controls.Add(this.txtPublisher);
            this.Controls.Add(this.txtAuthor);
            this.Controls.Add(this.txtBookID);
            this.Controls.Add(this.butCancel);
            this.Controls.Add(this.butSave);
            this.Controls.Add(this.butDelete);
            this.Controls.Add(this.butUpdate);
            this.Controls.Add(this.butInsert);
            this.Controls.Add(this.dataGridBook);
            this.Controls.Add(this.txtMasterBook);
            this.Name = "MsBookForm";
            this.Text = "MsBookForm";
            this.Load += new System.EventHandler(this.MsBookForm_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dataGridBook)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.boxTotalPage)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.boxStock)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label txtMasterBook;
        private System.Windows.Forms.DataGridView dataGridBook;
        private System.Windows.Forms.Button butCancel;
        private System.Windows.Forms.Button butSave;
        private System.Windows.Forms.Button butDelete;
        private System.Windows.Forms.Button butUpdate;
        private System.Windows.Forms.Button butInsert;
        private System.Windows.Forms.Label txtBookID;
        private System.Windows.Forms.Label txtBookTitle;
        private System.Windows.Forms.Label txtBookTypeID;
        private System.Windows.Forms.Label txtPrice;
        private System.Windows.Forms.Label txtTotalPage;
        private System.Windows.Forms.Label txtAuthor;
        private System.Windows.Forms.Label txtPublisher;
        private System.Windows.Forms.Label txtISBN;
        private System.Windows.Forms.Label txtStock;
        private System.Windows.Forms.TextBox boxBookTitle;
        private System.Windows.Forms.TextBox boxAuthor;
        private System.Windows.Forms.TextBox boxPrice;
        private System.Windows.Forms.TextBox boxBookID;
        private System.Windows.Forms.TextBox boxPublisher;
        private System.Windows.Forms.TextBox boxISBN;
        private System.Windows.Forms.NumericUpDown boxTotalPage;
        private System.Windows.Forms.NumericUpDown boxStock;
        private System.Windows.Forms.ComboBox boxBookTypeID;
        private System.Windows.Forms.Label valueBookTypeName;
    }
}