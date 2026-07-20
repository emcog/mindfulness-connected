import { defineCollection, z } from 'astro:content';
import { glob } from 'astro/loaders';

const team = defineCollection({
  loader: glob({ pattern: '**/*.md', base: './src/content/team' }),
  schema: z.object({
    image: z.string(),
    name: z.string(),
    description: z.string(),
  }),
});

const timeline = defineCollection({
  loader: glob({ pattern: '**/*.md', base: './src/content/timeline' }),
  schema: z.object({
    image: z.string(),
    published: z.coerce.string(),
    title: z.string(),
    subtitle: z.string(),
    position: z.string().optional(),
  }),
});

const approach = defineCollection({
  loader: glob({ pattern: '**/*.md', base: './src/content/approach' }),
  schema: z.object({
    title: z.string(),
    image: z.string().optional(),
    'image-alt': z.string().optional(),
  }),
});

const overview = defineCollection({
  loader: glob({ pattern: '**/*.md', base: './src/content/overview' }),
  schema: z.object({
    title: z.string(),
    'banner-image': z.string(),
    'square-preview-image': z.string(),
    permalink: z.string(),
  }),
});

const overviewbanners = defineCollection({
  loader: glob({ pattern: '**/*.md', base: './src/content/overviewbanners' }),
  schema: z.object({
    image: z.string(),
    title: z.string(),
    subtitle: z.string(),
    'text-position': z.enum(['left', 'right']),
  }),
});

const products = defineCollection({
  loader: glob({ pattern: '**/*.md', base: './src/content/products' }),
  schema: z.object({
    img: z.string(),
    alt: z.string(),
  }),
});

const posts = defineCollection({
  loader: glob({ pattern: '**/*.md', base: './src/content/posts' }),
  schema: z.object({
    title: z.string(),
    'banner-image': z.string(),
    'square-preview-image': z.string(),
    permalink: z.string(),
    comments: z.boolean().optional(),
  }),
});

export const collections = { team, timeline, approach, overview, overviewbanners, products, posts };
