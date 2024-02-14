using System;
using Microsoft.EntityFrameworkCore.Migrations;

namespace TABLE_NOTATIONS.Migrations
{
    public partial class RecreateDB : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "Pessoa",
                columns: table => new
                {
                    PessoaId = table.Column<int>(type: "int", nullable: false),
                    Nome = table.Column<string>(type: "ntext", nullable: true),
                    CPF = table.Column<string>(type: "ntext", nullable: true),
                    Nascimento = table.Column<DateTime>(type: "date", nullable: false),
                    Idade = table.Column<int>(type: "int", nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Pessoa", x => x.PessoaId);
                });
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "Pessoa");
        }
    }
}
