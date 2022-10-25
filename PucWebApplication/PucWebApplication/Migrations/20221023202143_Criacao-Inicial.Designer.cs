﻿// <auto-generated />
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.EntityFrameworkCore.Migrations;
using Microsoft.EntityFrameworkCore.Storage.ValueConversion;
using PucWebApplication.Data;

#nullable disable

namespace PucWebApplication.Migrations
{
    [DbContext(typeof(Contexto))]
    [Migration("20221023202143_Criacao-Inicial")]
    partial class CriacaoInicial
    {
        protected override void BuildTargetModel(ModelBuilder modelBuilder)
        {
#pragma warning disable 612, 618
            modelBuilder
                .HasAnnotation("ProductVersion", "6.0.10")
                .HasAnnotation("Relational:MaxIdentifierLength", 64);

            modelBuilder.Entity("PucWebApplication.Models.Usuario", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int")
                        .HasColumnName("Id");

                    b.Property<string>("Bairro")
                        .IsRequired()
                        .HasColumnType("longtext")
                        .HasColumnName("Bairro");

                    b.Property<string>("Cidade")
                        .IsRequired()
                        .HasColumnType("longtext")
                        .HasColumnName("Cidade");

                    b.Property<string>("Complemento")
                        .IsRequired()
                        .HasColumnType("longtext")
                        .HasColumnName("Complemento");

                    b.Property<string>("Email")
                        .IsRequired()
                        .HasColumnType("longtext")
                        .HasColumnName("Email");

                    b.Property<int>("Idade")
                        .HasColumnType("int")
                        .HasColumnName("Idade");

                    b.Property<string>("Nome")
                        .IsRequired()
                        .HasColumnType("longtext")
                        .HasColumnName("Nome");

                    b.Property<int>("Numero")
                        .HasColumnType("int")
                        .HasColumnName("Numero");

                    b.Property<string>("Rua")
                        .IsRequired()
                        .HasColumnType("longtext")
                        .HasColumnName("Rua");

                    b.Property<string>("Senha")
                        .IsRequired()
                        .HasColumnType("longtext")
                        .HasColumnName("Senha");

                    b.Property<int>("cep")
                        .HasColumnType("int")
                        .HasColumnName("CEP");

                    b.Property<int>("cpf")
                        .HasColumnType("int")
                        .HasColumnName("CPF");

                    b.HasKey("Id");

                    b.ToTable("Usuario");
                });
#pragma warning restore 612, 618
        }
    }
}